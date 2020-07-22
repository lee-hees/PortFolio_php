<!-- https://choidy180.github.io/portfolio_msk/index.html -->
<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>포트폴리오</title>
    <link rel="stylesheet" href="/css/index.css">
    <link rel="stylesheet" href="/css/nav.css">
    <link rel="stylesheet" href="/css/bottom.css">
    <link rel="stylesheet" href="/css/style.css">

    <script>
    function includeHTML() {
        var z, i, elmnt, file, xhttp;
        /*loop through a collection of all HTML elements:*/
        z = document.getElementsByTagName("*");
        for (i = 0; i < z.length; i++) {
            elmnt = z[i];
            /*search for elements with a certain atrribute:*/
            file = elmnt.getAttribute("w3-include-html");
            if (file) {
                /*make an HTTP request using the attribute value as the file name:*/
                xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function() {
                    if (this.readyState == 4) {
                        if (this.status == 200) {
                            elmnt.innerHTML = this.responseText;
                        }
                        if (this.status == 404) {
                            elmnt.innerHTML = "Page not found.";
                        }
                        /*remove the attribute, and call this function once more:*/
                        elmnt.removeAttribute("w3-include-html");
                        includeHTML();
                    }
                }
                xhttp.open("GET", file, true);
                xhttp.send();
                /*exit the function:*/
                return;
            }
        }
    };
    </script>
</head>

<body>

    <!-- <div w3-include-html="/html/nav.html">머리말</div>





    <div class="main_page">
        <div class="Home_main_area">
            <div class="Home_main_next_box">
            </div>
            <div class="Home_main_right_box">
            </div>
        </div>
        <div class="main_card_area">
            <div class="main_card_section">
                <div class="main_card_box">
                    <div class="main_card_box_top">
                        <div class="main_card_box_img_box">
                            <img class="main_card_box_img_box_img"
                                src="https://i.pinimg.com/originals/da/95/68/da9568b5a183aaa7a70f096e00692558.gif"
                                alt={last_name} title={last_name} />
                        </div>
                        <div class="main_card_box_name_area">
                            <div class="main_card_box_name_box">
                                <p>MinSeok</p>
                                <p>Kim</p>
                            </div>
                            <div class="main_card_box_label_box">
                                <div class="main_card_box_label_box_label"></div>
                            </div>
                            <div class="main_card_box_job_box">
                                <span class="main_card_box_job_box_text">DEVELOPER</span>
                            </div>
                        </div>
                    </div>
                    <div class="main_card_box_bottom">
                    </div>
                </div>
                <div class="main_text_box">
                    <h2 class="main_text_box_head">김민석</h2>
                    <p class="main_text_box_sub_text">김민석의 포트폴리오 입니다.</p>
                    <div class="button_box">
                        <a href="resume.html"><button class="resume_button">RESUME</button></a>
                        <a href="projects.html"><button class="projects_button">PROJECTS</button></a>
                        </Link>
                    </div>
                    <div class="main_text_box_content">
                        <p class="main_text_box_content_top">I'm a paragraph. Click here to add your own text and edit
                            me. It’s easy. Just click “Edit Text” or double click me to add your own content and make
                            changes to the font.</p>
                        <p class="main_text_box_content_bottom">동서대학교 DN 연구실,동서대학교 DN 연구실,동서대학교 DN 연구실,</p>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <div w3-include-html="/html/bottom.html">꼬리말</div> -->


    <a href="index.php">home</a>

    <ol>
    <?php 
        $llist = scandir('./data/');
        $i=0;
        while($i<count($llist)){
            if ($llist[$i]!='.'){
                if ($llist[$i]!='..'){
                    echo "<a href=\"index.php?id=$llist[$i]\">$llist[$i]</a><br/>\n";
                }
            }
            $i+=1;
        }
    ?>

        <!-- <p> <a href="index.php?id=1_아이디어_경진대회">aaa</a> </p> -->
        <!-- <p> <a href="index.php?id=bb">bbb</a> </p> -->
    </ol>


    <h2> <?php  echo $_GET['id']; ?> </h2>
    <?php echo file_get_contents("data/".$_GET['id']); ?>



    <script>
    includeHTML();
    </script>

</body>

</html>
