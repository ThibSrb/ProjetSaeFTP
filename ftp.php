<?php
//A DEFINIR PAR L'ADMIN DU FTP
  $root = "../www";
  $user = "admin";
  $pass = "pepere";
//A DEFINIR PAR L'ADMIN DU FTP

  session_start();
  //session_destroy();
  ob_start();


  $logged = "MmmhNoNoNo";

  if (!empty($_POST['username']) && !empty($_POST['password'])) {
    if ($_POST['username'] == $user && $_POST['password'] == $pass) {
      $_SESSION['logged'] = "YouAreLogged";
      print('<script> window.location.href = window.location.href </script>');
    }
  }

  if (!empty($_SESSION['logged'])) {
    $logged = $_SESSION['logged'];
  }

  $notFound = false;
  $xhrReq = false;
  $reqType = "none";
  if (!empty($_POST['xhrReq'])) {
      $xhrReq = true;
      $reqType = $_POST['xhrReq'];
  }

  //$root = getcwd();
  $explore = "/";
  //print($root);
  if (!empty($_GET['dir'])) {
    $explore = $_GET['dir']."/";
  }
  //print($explore);

  $currentDir = $root.$explore;

  if (is_dir($currentDir)) {
    $allDir = scandir($currentDir);
  }
  else {
    $allDir = $root;
    $notFound = true;
  }

//TRI ENTRE DOSSIER ET FICHIERS
$notSorted = true;
  while ($notSorted) {
    $notSorted = false;

    for ($i=0; $i < count($allDir) - 1; $i++) {
      if (!is_dir($allDir[$i]) && is_dir($allDir[$i+1])) {
        $temp = $allDir[$i];
        $allDir[$i] = $allDir[$i+1];
        $allDir[$i+1] = $temp;

        $notSorted = true;
      }
    }
  }
//FIN DU TRI

 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SaeFTP</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
  </head>
  <style media="screen">
  body {
    margin: 0px;
    text-align: center;
    font-family: 'Roboto', sans-serif;
    color:black;
    /*filter: hue-rotate(280deg);*/
  }
  * {
    outline: none;
  }
  .currentPath{
    display: inline-flex;
    justify-content: flex-start;
    align-items: center;
    padding: 20px;
    box-sizing: border-box;
    height:90px;
    width:calc(100% - 40px);
    box-sizing: border-box;
    overflow: hidden;
    background-color: white;
    margin: 20px;
    margin-bottom: 0px;
    border-radius: 20px;
    overflow: auto;
    overflow-y: hidden;
  }

  .pathLi {
    color:black;
    text-decoration: none;
    background-color: #efefef;
    height: 50%;
    width: auto;
    padding: 20px;
    box-sizing: border-box;
    display: inline-flex;
    justify-content: center;
    align-items: center;
    border-radius: 20px;
    margin: 5px;
  }

  .pathLi p {

  }

  .currentRepo {
    height:calc(100% - 150px);
    width: calc(100% - 348px);
    margin: 20px;
    background-color: #fff;
    display: inline-block;
    border-radius: 20px;
    vertical-align: top;
    overflow: hidden;
    overflow: auto;
    overflow-x: hidden;
    transition: .3s;
  }

  .addToCurrent {
    width:288px;
    min-height: 40px;
    height: calc(100vh - 330px);
    display: inline-block;
    background-color: white;
    border-radius: 20px;
    vertical-align: top;
    margin-top: 20px;
    overflow: hidden;
  }

  .createDir {
  width:100%;
  height: 160px;
  display: inline-flex;
  background-color: white;
  border-radius: 20px;
  vertical-align: top;
  margin-top: 20px;
  overflow: hidden;
  justify-content: center;
  align-items: center;
  flex-wrap: wrap;
  }

  .createDir input {
    width:80%;
    border: 3px solid #dedede;
    height : 40px;
    border-radius: 20px;
    padding-left: 20px;
    box-sizing: border-box;
    margin-bottom: 20px;
    margin-top: 20px;
    font-size: 100%;
    font-family: 'Roboto', sans-serif;
  }

  .createDir button {
    width:80%;
    height:40px;
    border:0px solid white;
    border-radius: 20px;
    background-color: #c46ac4;
    margin-bottom: 20px;
    color:white;
    font-size: 100%;
    font-family: 'Roboto', sans-serif;
    transition: .3s;
  }

  .createDir button:hover {
    background-color: #804580;
  }

  .AddThings {
    width:288px;
    height:100%;
    display: inline-block;
    margin-left: 20px;
  }

  .addToCurrent .fileInput {
    display: none;
  }

  .fileInput + .fileButton {
    background-color: #ddffdd;
  }

  .addToCurrent .fileButton{
    width:100%;
    height:100%;
    background-color: white;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: .3s;
  }

  .addToCurrent .fileButton:hover{
    background-color: #efefef77;
  }

  .main {
    height:100vh;
    max-height: 100vh;
    width: 100%;
    overflow: hidden;
    background: rgb(255,186,255);
    background: linear-gradient(135deg, rgba(255,186,255,1) 0%, rgba(138,200,255,1) 100%);
  }

/*DIR*/
.dir{
  width: 100%;
  box-sizing: border-box;
  border : 0px solid white;
  border-bottom: 2px solid #dedede;
  height:70px;
  overflow: hidden;
  background-color: white;
  display: flex;
  padding: 0px;
  align-items: center;
  transition: .3s;
}

.dir button {
  box-sizing: border-box;
  font-family: 'Roboto', sans-serif;
  color:#c46ac4;
  text-decoration: underline;
  font-size: 100%;
  display: inline-block;
  border: 0px;
  background-color: #fff0;
  border-radius: 20px;
  margin: 20px;
  box-sizing: border-box;
  transition: .3s;
}
.dir button:hover {
  color: #804580;
  cursor: pointer;
}

.inDir {
  width:100%;
  height: 100%;
  overflow: hidden;
  box-sizing: border-box;
  text-align: left;
  display: inline-flex;
  align-items: center;
  text-decoration: none;
  color:black;
}

.dir:hover {
  background-color: #efefef77;
}
/*DIR*/



/*FILE*/
  .file{
    width: 100%;
    box-sizing: border-box;
    border : 0px solid white;
    border-bottom: 2px solid #dedede;
    height:70px;
    overflow: hidden;
    background-color: white;
    display: flex;
    padding: 0px;
    align-items: center;
    transition: .3s;
  }

  .file button {
    box-sizing: border-box;
    font-family: 'Roboto', sans-serif;
    color:#c46ac4;
    text-decoration: underline;
    font-size: 100%;
    display: inline-block;
    border: 0px;
    background-color: #fff0;
    border-radius: 20px;
    margin: 20px;
    box-sizing: border-box;
    transition: .3s;
  }
  .file button:hover {
    color: #804580;
    cursor: pointer;
  }

  .inFile {
    width:100%;
    height: 100%;
    overflow: hidden;
    box-sizing: border-box;
    text-align: left;
    display: inline-flex;
    align-items: center;
    text-decoration: none;
    color:black;
  }

  .file:hover {
    background-color: #efefef77;
  }
/*FILE*/



  .zoneHighlight > * {
    background-color: #ffdbff !important;
  }

  .zoneHighlight {
    background-color: #ffdbff !important;
  }

  #alert {
    display: block;
    height: 0px;
    overflow: visible;
    transform: translateY(-20px);
    color:red;
  }

  @media only screen and (max-width: 600px) {
    .AddThings {
      width: 100%;
      display: flex;
      height:200px;
    }

    .addToCurrent {
      height: calc(100% - 40px);
      width: 30%;
      margin-right: 20px;
    }
    .currentRepo {
      margin-top: 0px;
      width: calc(100% - 40px);
      height:calc(100vh - 330px);
    }
    .createDir {
      width : calc(70% - 60px);
      margin-right: 20px;
      box-sizing: border-box;
    }
  }


  </style>
  <body>
    <div class="main">
      <div class="currentPath">
        <a href="?dir=" class="pathLi"><p>root</p></a>
        <?php
        $explodedExplore = explode('/',$explore);
        $tampDir = "?dir=";
        for ($r=0; $r < count($explodedExplore) - 1; $r++) {
          if ($explodedExplore[$r] != "") {
            $tampDir .="/".$explodedExplore[$r];
            print('/<a href="'.$tampDir.'" class="pathLi"><p>'.$explodedExplore[$r].'</p></a>');
          }
        }
        //print('test')
         ?>
      </div>
      <br>


      <div class="AddThings">
        <div class="addToCurrent">
          <input id="addToCurrentFileInput" class="fileInput" type="file" multiple name="" value="" onchange="processAddingFiles(this.files)">
          <label for="addToCurrentFileInput" class="fileButton"><img src="../data/images/upload.svg" height="20px" alt="">&nbsp;&nbsp;Select or Drag files</label>
        </div>
        <div class="createDir">
          <div class="">
            <input id="dirName" type="text" name="dirName" value="" placeholder="Directory name">
            <small id="alert" class="createDirAlert"><!--Directory name is necessary--></small>
            <button type="button" name="button" onclick="createDir()">Create directory</button>
          </div>
        </div>
      </div><div class="currentRepo" method="post">
        <!--<button class="dir" name="1">
          <div class="inDir">
            <img src="../data/images/dossier.svg" alt="" height="50%" style="margin-top:2px;margin-left:20px;margin-right:15px;">
            <p>test</p>
          </div>
        </button>-->

        <?php
        $i = 2;
        while ($i < count($allDir)) {
          $tf = $allDir[$i];

          if (is_dir($currentDir.$tf)) {
            print('<div class="dir">
              <a class="inDir" href="?dir='.$explore.$tf.'">
                <img src="../data/images/dossier.svg" alt="" height="50%" style="margin-top:2px;margin-left:20px;margin-right:15px;">
                <p>'.$tf.'</p>
              </a>
              <button type="button" onclick="del(\''.str_replace('/','//',$tf).'\')">Delete</button>
            </div>');
          }
          else {

            $splitedFileName = explode(".",$tf);
            $fileExt = $splitedFileName[count($splitedFileName) - 1];

            if ($fileExt == "jpg" || $fileExt == "jpeg" || $fileExt == "png" || $fileExt == "svg" || $fileExt == "gif") {
              $type = "image";
            }
            else {
              $type = "fichier";
            }

            if (!($tf == "ftp.php" && $explore == "/")) {
              print('<div class="file">
                <a class="inFile" href="'.$root.$explore.$tf.'">
                  <img src="../data/images/'.$type.'.svg" alt="" height="50%" style="margin-top:2px;margin-left:20px;margin-right:15px;">
                  <p>'.$tf.'</p>
                </a>
                <button type="button" onclick="del(\''.str_replace('/','//',$tf).'\')">Delete</button>
              </div>');
            }

          }



          $i+=1;
        }

         ?>
      </div>
    </div>

    <script type="text/javascript">

    document.addEventListener('dragenter', dontCare, false)
    document.addEventListener('dragleave', dontCare, false)
    document.addEventListener('dragover', dontCare, false)
    document.addEventListener('drop', dontCare, false)

    let dropzone = document.querySelector('.addToCurrent')

    dropzone.addEventListener('dragenter', zoneEnter, false)
    dropzone.addEventListener('dragleave', zoneLeave, false)
    dropzone.addEventListener('dragover', zoneEnter, false)
    dropzone.addEventListener('drop', dropOnZone, false)

    let curRep = document.querySelector('.currentRepo')

    curRep.addEventListener('dragenter', zone2Enter, false)
    curRep.addEventListener('dragleave', zone2Leave, false)
    curRep.addEventListener('dragover', zone2Enter, false)
    curRep.addEventListener('drop', dropOnZone2, false)


    function dontCare(e){
      e.preventDefault();
      e.stopPropagation();
    }

    function zoneEnter(e){
      e.preventDefault();
      e.stopPropagation();
      dropzone.classList.add("zoneHighlight");
    }

    function zoneLeave(e){
      e.preventDefault();
      e.stopPropagation();
      dropzone.classList.remove("zoneHighlight");
    }

    function dropOnZone(e){
      zoneLeave(e);
      e.preventDefault();
      e.stopPropagation();

      let data = e.dataTransfer;
      let files = data.files;

      //console.log(files);

      processAddingFiles(files);
    }

    //drop 2

    function zone2Enter(e){
      e.preventDefault();
      e.stopPropagation();
      curRep.classList.add("zoneHighlight");
    }

    function zone2Leave(e){
      e.preventDefault();
      e.stopPropagation();
      curRep.classList.remove("zoneHighlight");
    }

    function dropOnZone2(e){
      zoneLeave(e);
      e.preventDefault();
      e.stopPropagation();

      let data = e.dataTransfer;
      let files = data.files;

      //console.log(files);

      processAddingFiles(files);
    }

    //drop2

    var wait
    function processAddingFiles(files){
      wait = 0
      var  nb = files.length;
      for (var i = 0; i < files.length; i++) {
        //console.log(files[i])
        uploadFile(files[i],nb);
      }
      //document.location.reload(true)
    }

    function uploadFile(file,nb) {
      //console.log(file)
      var url = window.location
      var xhr = new XMLHttpRequest()
      var formData = new FormData()
      var xhr = new XMLHttpRequest();
      xhr.open("POST", url, true);

      //Envoie les informations du header adaptées avec la requête
      //xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

      xhr.onreadystatechange = function() { //Appelle une fonction au changement d'état.
        if (this.readyState === XMLHttpRequest.DONE && this.status === 200) {
          console.log(this.responseText)
          wait += 1;
          if (wait == nb) {


            window.location.href = window.location.href
          }
          //document.location.reload(true)
        }
      }
      formData.append('file',file)
      formData.append('xhrReq',"addFile")
      xhr.send(formData);
    }




    function createDir(){
      var name = document.querySelector('#dirName').value;
      console.log(name);

      var url = window.location
      var xhr = new XMLHttpRequest()
      var formData = new FormData()

      xhr.open("POST", url, true);

      //Envoie les informations du header adaptées avec la requête
      //xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

      xhr.onreadystatechange = function() { //Appelle une fonction au changement d'état.
        if (this.readyState === XMLHttpRequest.DONE && this.status === 200) {
          if (this.responseText == "1") {
            window.location.href = window.location.href
          }
          else{
            document.querySelector('.createDirAlert').innerHTML = this.responseText;
          }
        }
      }

      formData.append('dirName',name)
      formData.append('xhrReq',"addDir")

      xhr.send(formData);
    }



    function del(path){

      var url = window.location
      var xhr = new XMLHttpRequest()
      var formData = new FormData()

      xhr.open("POST", url, true);

      //Envoie les informations du header adaptées avec la requête
      //xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

      xhr.onreadystatechange = function() { //Appelle une fonction au changement d'état.
        if (this.readyState === XMLHttpRequest.DONE && this.status === 200) {
          if (this.responseText == "1") {
            window.location.href = window.location.href
          }
          else{
            console.log(this.responseText)
          }
        }
      }

      formData.append('delName',path)
      formData.append('xhrReq',"delete")

      xhr.send(formData);


    }




    </script>

  </body>
</html>


<?php if ($notFound) {
  ob_end_clean();
  print('"'.$currentDir.'" does not exist as a directory');
} ?>





<?php
if ($logged != "YouAreLogged") {
  ob_end_clean();
  print('<html style="padding:0;margin:0;border:0;">
    <head>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta charset="UTF-8">
      <link href="https://fonts.googleapis.com/css?family=Roboto:300" rel="stylesheet">
      <title>
        Formulaire
      </title>
    </head>
    <body>

      <style>

        body {
          text-align:center;
          padding:0;
          margin:0;
          border:0;
        }

        .container{
          width: 100%;
          height:100%;
          background: rgb(255,186,255);
          background: linear-gradient(135deg, rgba(255,186,255,1) 0%, rgba(138,200,255,1) 100%);
          display: flex;
          align-items: center;
          justify-content: center;
        }

        .form {
          padding-top: 60px;
          display:inline-flex;
          align-items: center;
          justify-content: center;
          flex-wrap: wrap;
          max-width: 580px;
          width:95%;
          background-color: #fdfdfd;
          border: solid 0px #dedede;
          font-family: "Roboto", sans-serif;
          border-radius: 20px;
      }

    .form .button {
      display: flex;
      align-items: center;
      justify-content: center;
      margin: 0px 40px 20px 40px;
      font-size:100%;
      color:white;
      width: 100px;
      height: 45px;
      background-color:#8bc8ff;
      border:none;
      border-radius: 50px;
      cursor: pointer;
      transition: .3s;
      filter:hue-rotate(0deg);
    }

    .form .button:hover {
      background-color: #febaff;
    }

    .form input {
      display: block;
      width: 100%;
      margin: 0px 40px 20px 40px;
      height: 40px;
      border-radius:50px;
      background-color:#eee;
      border:0px solid #0000;
      box-sizing: border-box;
      padding-left: 20px;
      padding-right: 20px;
    }

    .form p {
      min-width: 90%;
      margin: auto 0px 10px 15px;
      box-sizing: border-box;
      padding-left: 10px;
      text-align: left;
    }

    @media screen and (max-width: 610px) {

      .form {
        width: 95%;
        min-width: 0px;
      }

    }

      </style>
      <div class="container">
          <form class="form" method="post">
            <p>Username&nbsp;&nbsp;</p>
              <input type="text" placeholder="User name" name="username" value="" required></input>
            <p>Password&nbsp:&nbsp</p>
              <input type="password" placeholder="Password" name="password" value=""></input>
              <button type="submit" class="button" name="button">Login</button>
          </form>
      </div>

    </body>
  </html>');
}
 ?>





<?php

 if ($xhrReq == true && $logged == "YouAreLogged") {
  ob_end_clean();
  //print_r($_POST);
  //print_r($_FILES);

  //ADD FILE
if ($reqType == "addFile") {
  $file = $_FILES['file']['tmp_name'];
  $filename = $_FILES['file']['name'];

  //print_r($file."\n");
  //print_r($filename."\n");

  if (!file_exists($currentDir.$filename)) {
    move_uploaded_file($file,$currentDir.$filename);
  }
  else {
    print("file ".$filename." already exists");
  }
}


//ADD DIR
if ($reqType == "addDir") {

  $dirName = $_POST['dirName'];

  $forbidden = array("/", "/", "<", ">", "?", "*", ":", "|", '"', " ", ".","$");

  if (str_replace($forbidden,"",$dirName) == "" || str_replace($forbidden,"",$dirName) != $dirName) {
    print("Invalid directory name");
  }
  else if (is_dir($currentDir.'/'.$dirName)) {
    print("This directory already exists");
    //print($currentDir.$dirName);
  }
  else {
    mkdir($currentDir.'/'.$dirName);
    print("1");
  }
}


//DELETE

  if ($reqType == "delete") {

    function deleteDirectory($direct) {
      if (!file_exists($direct)) {
        return true;
        }

        if (!is_dir($direct)) {
          return unlink($direct);
        }

        foreach (scandir($direct) as $item) {
          if ($item == '.' || $item == '..') {
              continue;
            }

            if (!deleteDirectory($direct . DIRECTORY_SEPARATOR . $item)) {
              return false;
            }
          }

      return rmdir($direct);
    }

    $delName = $_POST['delName'];
    $delPath = $root.$explore.$delName;

    if ($delPath != $root."/ftp.php") {
      if (file_exists($delPath)){

        if (!is_dir($delPath)) {
          unlink($delPath);
        }
        else {
          deleteDirectory($delPath);
        }

        print("1");
      }
      else{
        print("File does not exists");
      }
    }
    else {
      print("You don't have the permmission to delete that file");
    }


  }

}
else if ($logged == "MmmhNoNoNo" && $xhrReq == true) {
  ob_end_clean();
  print("You don't have the permission to do this.");
}
?>
