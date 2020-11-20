<?php

$dns = 'mysql:host=localhost;port=3306;dbname=photo;charset=utf8';
$lgdb = 'root';
$passdb = '';
$db = new PDO($dns, $lgdb, $passdb);


class db
{

    public static function loginUser()
    {
    if(isset($_POST['login'])){
        global $db;
        $login = htmlspecialchars($_POST['login']);
        $pass  = htmlspecialchars($_POST['password']);
        $query = $db->query('SELECT * from users WHERE login = \'' . $login . '\'');
        $result = $query->fetch(PDO::FETCH_ASSOC);
        if ($result['login'] == $_POST['login']) {
            if ($result['password'] == $pass) {
                $_SESSION['user']['id'] = $result['id'];
                $_SESSION['user']['login'] = $result['login'];
            } else {
                echo '<br><sapn class="login-error">Incorrect username or password entered</sapn>';
            }
        } else {
            echo '<br><sapn class="login-error">Incorrect username or password entered</sapn>';
        }
    }
}

    public static function fileSave(){
        $fileTmpPath = $_FILES['fname']['tmp_name'];
        $fileName = $_FILES['fname']['name'];
        $fileSize = $_FILES['fname']['size'];
        $fileNameCmps = explode(".", $fileName);
        $fileExtension = strtolower(end($fileNameCmps));

        $newFileName = md5(time() . $fileName) . '.' . $fileExtension;

        $allowedfileExtensions = array('jpg', 'gif', 'png', 'zip', 'txt', 'xls', 'doc');
        if (in_array($fileExtension, $allowedfileExtensions)) {
            $uploadFileDir = './img/';
            $dest_path = $uploadFileDir . $newFileName;
            if (move_uploaded_file($fileTmpPath, $dest_path)) {
                echo $message = '<span class="successfully">File is successfully uploaded.</span>';
            } else {
                echo $message = '<span class="error">There was some error moving the file to upload directory. Please make sure the upload directory is writable by web server.</span>';
            }
        }
        return $newFileName;
    }

    public static function sendPost()
    {
        global $db;
        if(isset($_SESSION['user']['login'])){

        date_default_timezone_set('UTC');

        $sth = $db->prepare('INSERT INTO posts (`Id_users`,`title`,`text`,`img_name`,`created_at` )
                             VALUES (:id,:title,:text,:img,:date_time)');
        $newFileName = db::fileSave();
        $sth->execute([':id' => $_SESSION['user']['id'], ':title' => $_POST['title'],':text' => $_POST['text'],
                        ':img' => $newFileName,':date_time' => date("y.m.d")]);

        echo '<br>';

    }
    }



    public static function  requestItems($count){
        global $db;
        if(isset($_POST['count'])){
            $count = $_POST['count'];
        }
        $query = $db->prepare('SELECT * FROM posts WHERE id > :id LIMIT '.$count);
        $query->execute(['id' => 1]);
        $query = $query->fetchAll(PDO::FETCH_ASSOC);
        return $query;
    }

    public static function onePost($id){
        global $db;
        $query = $db->prepare('SELECT * FROM posts WHERE id = :id');
        $query ->execute(['id' => $id]);
        $query = $query->fetchAll(PDO::FETCH_ASSOC);
        return $query;
    }

    public static function editPost( $id){
            if((isset($_SESSION['user']['login'])) && isset($_POST['edit']) )
            {
                global $db;
                if($_FILES['fname']['name'] !== '')
                {

                    $file = db::fileSave();
                    unlink('img/'.$_POST['firstFName']);
                }else
                {
                    $file = $_POST['file_name'];
                }

                $query = $db->prepare('UPDATE posts SET title = :title, text = :text, img_name = :img_name, positionX = :positionX  WHERE id = '.$_POST['post__id']);
                $query->execute(['title' => $_POST['title'], 'text' => $_POST['text'],
                                'img_name' => $file, 'positionX' => $_POST['positionX']]);
                    print_r($query->errorInfo());

                    if($query)
                    {
                        echo '<span class="successfully">Request completed successfully</span>';
                    }else
                    {
                        echo '<span class="error">The request was not processed</span>';
                    }
                    $_SESSION['location'] = '/admin';
            }
        }

    public  static function deletePost(){
        global $db;
        $id = $_POST['id_post'];
        if((isset($_SESSION['user']['login'])) && ($_POST['type'] == 'dell')){
            $post = db::onePost($id);
            $query = $db->prepare('DELETE FROM posts WHERE id = '.$id);
            $query->execute();
            unlink('img/'. $post['0']['img_name']);
            $_SESSION['location'] = '/admin';
        }
        }
    public static function sendMail(){
        if($_POST['type'] == 'mail'){
            $fio = htmlspecialchars($_POST['fio']);
            $email = htmlspecialchars($_POST['E-mail']);
            $mess = htmlspecialchars($_POST['message']);
            $send = mail("gufe26@gmail.com", "Заявка с сайта", "ФИО:".$fio."<br> E-mail: ".$email."<br> Message: ".$mess );
            if($send){
                echo 'senc';
            }
            else{
                echo 'not true';
            }
        }
    }
    }
?>