<?php

    class Demo {
        static function target($pattern){
            $htmlTarget = '
            <main class="circle '.$pattern.'">
                <figure class="target">
                    <img src="../../img/bg_image_'.$pattern.'.png" alt="">
                    <span class="answer"></span>
                    <button class="start"></button>
                </figure>                    
                <form action="demo.php" method="POST" hidden>
                        <input type="hidden" name="answer" id="answer">
                        <input type="hidden" name="selectedTarget" id="selectedTarget">
                        <input type="hidden" name="check" id="check">
                        <input type="hidden" name="responseTime" id="responseTime">
                        <input type="hidden" name="item_num" id="item_num">
                        <input type="hidden" name="answer_id" id="answer_id">
                        <input type="hidden" name="target_id" id="target_id">
                        <input type="hidden" name="count" id="count">
                </form>
            ';
            return $htmlTarget;
        }

        static function circleList(){
            $htmlList = '
                <section class="circumference">
                </section>
                <aside class="center">
                    <button class="find">
                        回答する
                    </button>
                    <button class="noTarget">
                        なし
                    </button>
                </aside>
            </main>
            ';
            return $htmlList;
        }

        static function script($count, $pattern){
            $htmlScript = '
            </body>
            <script>
                var count = '.$count.';
                var pattern = "'.$pattern.'";
            </script>
            <script src="../../Components/js/circle.js" defer></script>
            </html>
            ';
            return $htmlScript;
        }

        static function demoResult($answerColor, $selectedColor, $result){
            $no = "";
            if($selectedColor == "no"){
                $no = "なし";
            }
            $htmlDemoResult = '
                <main class="demo">
                    <section>
                        <figure>
                            <span class="'.$answerColor.'"></span>
                            <figcaption>
                                ターゲット
                            </figcaption>
                        </figure>
                        <figure>
                            <span class="'.$selectedColor.'">'.$no.'</span>
                            <figcaption>
                                あなたの回答
                            </figcaption>
                        </figure>
                    </section>
                    <h3>'.$result.'</h3>
                    <aside>
                        <a href="introduction.php">教示画面</a>
                        <a href="demo.php">もう一度</a>
                        <a href="home.php">理解した</a>
                    </aside>
                </main>
            </body>
            </html>
            ';
            return $htmlDemoResult;
        }
    }