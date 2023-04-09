<?php
class UserClass{
    public function __construct(){
        $this->isLoggedIn();
        if (isset($_POST["login"])) {
            $this->Login();
        }
    }
    public function logOut(){
        
        session_destroy();
        header('Location: index.php');
        
    }

    public function isLoggedIn(){
        
    require ('conn.php');

        if(!empty(@$_SESSION['sid'])){   
            return true;        
        } else {    
            return false;
        }

    }
    private function Login(){
        
        require ("conn.php");
            

            if(isset($_POST['login'])){
                
 
                $semail = $_POST['semail'];
                $spass = $_POST['spass'];
                

                if(!empty($semail) && !empty($spass)){
                    

                    $stmt = $conn->prepare("SELECT semail, spass FROM users WHERE semail = ?");
                    $stmt->bind_param("s", $semail);
                    $stmt->execute();
                    $result = $stmt->get_result();
                    $stmt->close();
                    if ($result->num_rows === 1) {
                        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

                        if (password_verify($spass, $row['spass'])) {

                            $_SESSION['sid'] = $row['semail'];          
                        } else {
                            $_SESSION['message'] = 'Email ou mot de passe incorect';
                        } 
                    } else {
                        $_SESSION['message'] = 'Email ou mot de passe incorect';
                    }   
                } else {
                    $_SESSION['message'] = 'Veuillez remplir tous les champs';
                }
            }
        }
}