<?php
include "config.php";
session_start();
$email=$_SESSION['email'];
if(!isset($email)){
    session_destroy();
    header('location:../login/login.php');
}

?>


<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <script src="https://cdn.jsdelivr.net/gh/hiukim/mind-ar-js@1.0.0/dist/mindar-face.prod.js"></script>
    <script src="https://aframe.io/releases/1.2.0/aframe.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/hiukim/mind-ar-js@1.0.0/dist/mindar-face-aframe.prod.js"></script>
    <?php 
                              
                              $pid=$_GET['pid'];
                              $query= "SELECT * FROM tbl_product where pid=$pid";
                              $query_run = mysqli_query($conn, $query);
                              $check_tbl_product = mysqli_num_rows($query_run) > 0;
                              
                              
                          if($check_tbl_product)
                          {
                             while($row = mysqli_fetch_assoc($query_run))
                             {
                                 
                                  ?> 
     <!-- <img src="../Admin/photo/  width="150px" height="400px"/></div> -->
    
    <script>
      document.addEventListener("DOMContentLoaded", function() {
    const list = ["glasses1", "glasses2", "hat1", "hat2", "earring","earring2","imgg"];
    const visibles = [true, false, false, true, true];

    const setVisible = (button, entities, visible) => {
      if (visible) {
        button.classList.add("selected");
      } else {
        button.classList.remove("selected");
      }
      entities.forEach((entity) => {
        entity.setAttribute("visible", visible);
      });
    }
    list.forEach((item, index) => {
      const button = document.querySelector("#" + item);
      const entities = document.querySelectorAll("." + item + "-entity");
      setVisible(button, entities, visibles[index]);
      button.addEventListener('click', () => {
        visibles[index] = !visibles[index];
        setVisible(button, entities, visibles[index]);
      });
    });
      })
    </script>
   
    <style>
      body {
        margin: 0;
      }
      .example-container {
        overflow: hidden;
        position: absolute;
        width: 100%;
        height: 100%;
      }
      .options-panel {
    position: fixed;
    left: 0;
    top: 0;
    z-index: 2;
      }
      .options-panel img {
    border: solid 2px;
    width: 50px;
    height: 50px;
    object-fit: cover;
    cursor: pointer;
      }
      .options-panel img.selected {
    border-color: green;
      }
    </style>
  </head>
<input type="hidden" id="earring" value="../Admin/photo/<?php echo $row['photo'] ?>">
  <body>
    <div class="example-container">
      <div class="options-panel">
    <img id="hat1" src="https://cdn.jsdelivr.net/gh/hiukim/mind-ar-js@1.0.1/examples/face-tracking/assets/hat/thumbnail.png"/>
    <img id="hat2" src="https://cdn.jsdelivr.net/gh/hiukim/mind-ar-js@1.0.1/examples/face-tracking/assets/hat2/thumbnail.png"/>
    <img id="glasses1" src="https://cdn.jsdelivr.net/gh/hiukim/mind-ar-js@1.0.1/examples/face-tracking/assets/glasses/thumbnail.png"/>
    <img id="glasses2" src="https://cdn.jsdelivr.net/gh/hiukim/mind-ar-js@1.0.1/examples/face-tracking/assets/glasses2/thumbnail.png"/>
    <img id="earring" src="https://cdn.jsdelivr.net/gh/hiukim/mind-ar-js@1.0.1/examples/face-tracking/assets/earring/thumbnail.png"/>
    <img id="earring2" src="../Admin/photo/<?php echo $row['photo'] ?>/>

      </div>

      <a-scene mindar-face embedded color-space="sRGB" renderer="colorManagement: true, physicallyCorrectLights" vr-mode-ui="enabled: false" device-orientation-permission-ui="enabled: false">
        <a-assets>
          <a-asset-item id="headModel" src="https://cdn.jsdelivr.net/gh/hiukim/mind-ar-js@1.0.1/examples/face-tracking/assets/sparkar/headOccluder.glb"></a-asset-item>
          <a-asset-item id="glassesModel" src="https://cdn.jsdelivr.net/gh/hiukim/mind-ar-js@1.0.1/examples/face-tracking/assets/glasses/scene.gltf"></a-asset-item>
          <a-asset-item id="glassesModel2" src="https://cdn.jsdelivr.net/gh/hiukim/mind-ar-js@1.0.1/examples/face-tracking/assets/glasses2/scene.gltf"></a-asset-item>
          <a-asset-item id="hatModel" src="https://cdn.jsdelivr.net/gh/hiukim/mind-ar-js@1.0.1/examples/face-tracking/assets/hat/scene.gltf"></a-asset-item>
          <a-asset-item id="hatModel2" src="https://cdn.jsdelivr.net/gh/hiukim/mind-ar-js@1.0.1/examples/face-tracking/assets/hat2/scene.gltf"></a-asset-item>
          <a-asset-item id="earringModel" src="https://cdn.jsdelivr.net/gh/hiukim/mind-ar-js@1.0.1/examples/face-tracking/assets/earring/scene.gltf"></a-asset-item>
          <a-asset-item id="earringModel2" src="../Admin/photo/<?php echo $row['photo'] ?>/></a-asset-item>
        </a-assets>

        <a-camera active="false" position="0 0 0"></a-camera>

    <!-- head occluder -->
        <a-entity mindar-face-target="anchorIndex: 168">
      <a-gltf-model mindar-face-occluder position="0 -0.3 0.15"rotation="0 0 0" scale="0.065 0.065 0.065" src="#headModel"></a-gltf-model>
        </a-entity>

        <a-entity mindar-face-target="anchorIndex: 10">
      <a-gltf-model rotation="0 -0 0" position="0 1.0 -0.5" scale="0.35 0.35 0.35" src="#hatModel" class="hat1-entity" visible="false"></a-gltf-model>
        </a-entity>
        <a-entity mindar-face-target="anchorIndex: 10">
      <a-gltf-model rotation="0 -0 0" position="0 -0.2 -0.5" scale="0.008 0.008 0.008" src="#hatModel2" class="hat2-entity" visible="false"></a-gltf-model>
        </a-entity>

        <a-entity mindar-face-target="anchorIndex: 168">
      <a-gltf-model rotation="0 -0 0" position="0 0 0" scale="0.01 0.01 0.01" src="#glassesModel" class="glasses1-entity" visible="false"></a-gltf-model>
        </a-entity>

        <a-entity mindar-face-target="anchorIndex: 168">
      <a-gltf-model rotation="0 -90 0" position="0 -0.3 0" scale="0.6 0.6 0.6" src="#glassesModel2" class="glasses2-entity" visible="false"></a-gltf-model>
        </a-entity>
    
        <a-entity mindar-face-target="anchorIndex: 127">
      <a-gltf-model rotation="-0.1 -0 0" position="0 -0.3 -0.3" scale="0.05 0.05 0.05" src="#earringModel" class="earring-entity" visible="false"></a-gltf-model>
        </a-entity>

        <a-entity mindar-face-target="anchorIndex: 356">
      <a-gltf-model rotation="0.1 -0 0" position="0 -0.3 -0.3" scale="0.05 0.05 0.05" src="#earringModel" class="earring-entity" visible="false"></a-gltf-model>
        </a-entity>
        <a-entity mindar-face-target="anchorIndex: 356">
      <a-gltf-model rotation="0.1 -0 0" position="0 -0.3 -0.3" scale="0.05 0.05 0.05" src="#earringModel2" class="earring-entity" visible="false"></a-gltf-model>
        </a-entity>
        <a-entity mindar-face-target="anchorIndex: 356">
          <a-gltf-model rotation="0.1 -0 0" position="0 -0.3 -0.3" scale="0.05 0.05 0.05" src="#imgg" class="earring-entity" visible="false"></a-gltf-model>
            </a-entity>
      </a-scene>
    </div>
  </body>
</html>
<?php
                             }}
                             ?>