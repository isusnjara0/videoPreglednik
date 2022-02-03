<?php
if(!empty($_REQUEST['id'])){
        $var = $_REQUEST['id'];
}?>

<div class="row pozadina">
    <div id="videoSekcija" class="col-8 p-3">
        <div id="player" class="d-flex align-items-center justify-content-center video_container mx-auto">
           <!-- <video class="fullscreen-video" controls>
                <source src="https://drive.google.com/file/d/1JIW2PDAAtVXY99edDZe_6bGPGAqVE7Lq/view?usp=sharing" type="video/mp4">
            </video> !-->
            <embed src="https://drive.google.com/file/d/1JIW2PDAAtVXY99edDZe_6bGPGAqVE7Lq/preview">
        </div>
        <div id="info" class="video_container mx-auto">
            <h1>Videozapis <?php echo $var;?></h1>
        </div>
        <div id="meta" class="video_container mx-auto">
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Placeat veniam, consectetur laudantium voluptates veritatis nemo libero reprehenderit harum tenetur exercitationem, voluptate incidunt dolor nam sit sunt maxime obcaecati eos illo.</p>
        </div>
        <div id="comments" class="video_container mx-auto"></div>
    </div>
    <div class="col-4 p-3">
        <div class="container p-3 tumb">
            <div class="row">
                <div class="col">
                    <img src="med.jpg" style="height: 94px">
                </div>
                <div class="col">
                    <h3>Video o medu</h3>
                    <p>Neki opis videa</p>
                </div>
            </div>
        </div>
        <div class="container p-3 tumb">
            <div class="row">
                <div class="col">
                    <img src="med.jpg" style="height: 94px">
                </div>
                <div class="col">
                    <h3>Video o medu</h3>
                    <p>Neki opis videa</p>
                </div>
            </div>
        </div>
    </div>
</div>