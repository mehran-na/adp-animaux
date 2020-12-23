<!--Header-->
<?php include 'header.php' ?>

<!--body de la page-->
<div class = "page">

<!--    <div class = "post">-->

        <div class = "container-a">
            <div class = "bo-head">
                <ul>
                    <li><?php echo "<strong>Nom :</strong>" . $anim1[1]; ?></li>
                    <li><?php echo "<strong>Type :</strong>" . $anim1[2]; ?></li>
                    <br>
                    <li>
                        Pour plus informations veuillez voire ma page
                    : <?php echo "<a href = 'animalInfo.php?" . http_build_query($anim1) . "'>Click ici</a></p>"; ?>
                    </li>
                </ul>
            </div>

        </div>
        <div class = "container-b">
            <div class = "bo-1">
                <ul>
                    <li><?php echo "<strong>Nom :</strong>" . $anim2[1]; ?></li>
                    <li><?php echo "<strong>Type :</strong>" . $anim2[2]; ?></li>
                    <br>
                    <li>
                        Pour plus informations veuillez voire ma page
                        : <?php echo "<a href = 'animalInfo.php?" . http_build_query($anim2) . "'>Click ici</a></p>"; ?>
                    </li>
                </ul>
            </div>
            <div class = "bo-2">
                <ul>
                    <li><?php echo "<strong>Nom :</strong>" . $anim3[1]; ?></li>
                    <li><?php echo "<strong>Type :</strong>" . $anim3[2]; ?></li>
                    <br>
                    <li>
                        Pour plus informations veuillez voire ma page
                        : <?php echo "<a href = 'animalInfo.php?" . http_build_query($anim3) . "'>Click ici</a></p>"; ?>
                    </li>
                </ul>
            </div>
        </div>
        <div class = "container-c">
            <div class = "bo-1">
                <ul>
                    <li><?php echo "<strong>Nom :</strong>" . $anim4[1]; ?></li>
                    <li><?php echo "<strong>Type :</strong>" . $anim4[2]; ?></li>
                    <br>
                    <li>
                        Pour plus informations veuillez voire ma page
                        : <?php echo "<a href = 'animalInfo.php?" . http_build_query($anim4) . "'>Click ici</a></p>"; ?>
                    </li>
                </ul>
            </div>
            <div class = "bo-2">
                <ul>
                    <li><?php echo "<strong>Nom :</strong>" . $anim5[1]; ?></li>
                    <li><?php echo "<strong>Type :</strong>" . $anim5[2]; ?></li>
                    <br>
                    <li>
                        Pour plus informations veuillez voire ma page
                        : <?php echo "<a href = 'animalInfo.php?" . http_build_query($anim5) . "'>Click ici</a></p>"; ?>
                    </li>
                </ul>
            </div>
        </div>
    </div>

<!--</div>-->

<!--footer-->
<?php include 'footer.php' ?>
