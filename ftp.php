<?php
//A DEFINIR PAR L'ADMIN DU FTP
  $root = "..\www";
//A DEFINIR PAR L'ADMIN DU FTP






  session_start();
  //session_destroy();
   ob_start();
   $notFound = false;
  $xhrReq = false;
  $reqType = "none";
  if (!empty($_POST['xhrReq'])) {
      $xhrReq = true;
      $reqType = $_POST['xhrReq'];
  }

  //$root = getcwd();
  $explore = "\\";
  //print($root);
  if (!empty($_GET['dir'])) {
    $explore = $_GET['dir']."\\";
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
    <title>SaeFTP</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
  </head>
  <style media="screen">
  body {
    margin: 0px;
    text-align: center;
    font-family: 'Roboto', sans-serif;
    color:black;
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
    width:60%;
    box-sizing: border-box;
    overflow: hidden;
    background-color: white;
    margin: 20px;
    margin-bottom: 0px;
    border-radius: 20px;
    overflow-y: hidden;
    overflow-x: scroll;
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
    width: 60%;
    margin: 20px;
    background-color: #fff;
    display: inline-block;
    border-radius: 20px;
    vertical-align: top;
    margin-right: calc(15% + 20px);
    overflow: hidden;
    overflow-y: scroll;
  }

  .addToCurrent {
    width:100%;
    height: 15vw;
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
    width:15%;
    height: 15vw;
    display: inline-block;

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
    background-color: #efefef;
  }

  .dir{
    width: 100%;
    box-sizing: border-box;
    border : 0px solid white;
    border-bottom: 2px solid #dedede;
    height:70px;
    overflow: hidden;
    background-color: white;
    display: block;
    padding: 0px;
    color:black;
  }

  .inDir {
    width:100%;
    height: 100%;
    overflow: hidden;
    background-color: white;
    box-sizing: border-box;
    text-align: left;
    display: inline-flex;
    align-items: center;
    transition: .3s;
  }

  .inDir:hover {
    background-color: #efefef77;
  }

  .file{
    width: 100%;
    box-sizing: border-box;
    border : 0px solid white;
    border-bottom: 2px solid #dedede;
    height:70px;
    overflow: hidden;
    background-color: white;
    display: block;
    padding: 0px;
  }

  .inFile {
    width:100%;
    height: 100%;
    overflow: hidden;
    background-color: white;
    box-sizing: border-box;
    text-align: left;
    display: inline-flex;
    align-items: center;
    transition: .3s;
  }

  .inFile:hover {
    background-color: #efefef77;
  }

  .zoneHighlight > * {
    background-color: #ffdbff !important;
  }

  #alert {
    display: block;
    height: 0px;
    overflow: visible;
    transform: translateY(-20px);
    color:red;
  }

  </style>
  <body>
    <div class="main">
      <div class="currentPath">
        <a href="?dir=" class="pathLi"><p>root/</p></a>
        <?php
        $explodedExplore = explode('\\',$explore);
        $tampDir = "?dir=";
        for ($r=0; $r < count($explodedExplore) - 1; $r++) {
          if ($explodedExplore[$r] != "") {
            $tampDir .="\\".$explodedExplore[$r];
            print('<a href="'.$tampDir.'" class="pathLi"><p>'.$explodedExplore[$r].'/</p></a>');
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
      </div>
      <div class="currentRepo" method="post">
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
            print('<a class="dir" href="?dir='.$explore.$tf.'">
              <div class="inDir">
                <img src="../data/images/dossier.svg" alt="" height="50%" style="margin-top:2px;margin-left:20px;margin-right:15px;">
                <p>'.$tf.'</p>
              </div>
            </a>');
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

            if ($tf !=  "ftp.php") {
              print('<a class="file" href="'.$root.$explore.$tf.'">
                <div class="inFile">
                  <img src="../data/images/'.$type.'.svg" alt="" height="50%" style="margin-top:2px;margin-left:20px;margin-right:15px;">
                  <p>'.$tf.'</p>
                </div>
              </a>');
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
            document.location.reload(true)
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
      var xhr = new XMLHttpRequest();
      xhr.open("POST", url, true);

      //Envoie les informations du header adaptées avec la requête
      //xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

      xhr.onreadystatechange = function() { //Appelle une fonction au changement d'état.
        if (this.readyState === XMLHttpRequest.DONE && this.status === 200) {
          if (this.responseText == "1") {
            document.location.reload(true)
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




    </script>

  </body>
</html>
<?php if ($notFound) {
  ob_end_clean();
  print('"'.$currentDir.'" does not exist as a directory');
} ?>


<?php if ($xhrReq == true) {
  ob_end_clean();
  //print_r($_POST);
  //print_r($_FILES);
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

if ($reqType == "addDir") {

  $dirName = $_POST['dirName'];

  $forbidden = array("/", "\\", "<", ">", "?", "*", ":", "|", '"', " ", ".","$");

  if (str_replace($forbidden,"",$dirName) == "" || str_replace($forbidden,"",$dirName) != $dirName) {
    print("Invalid directory name");
  }
  else if (is_dir($currentDir.'\\'.$dirName)) {
    print("This directory already exists");
    //print($currentDir.$dirName);
  }
  else {
    mkdir($currentDir.'\\'.$dirName);
    print("1");
  }
}


}
?>
