<?php

    class Demo {
        static function demoTest(){
            $htmlTest = '
            <main class="circle">
                <figure class="target">
                    <span class="answer"></span>
                    <button class="start">+</button>
                </figure>
                <section class="circumference">
                </section>
                <aside class="center">
                    <form action="demo.php" method="POST">
                        <input type="hidden" name="answer" id="answer">
                        <input type="hidden" name="selectedTarget" id="selectedTarget">
                        <input type="hidden" name="check" id="check">
                        <input type="hidden" name="responseTime" id="responseTime">
                        <input type="hidden" name="item_num" id="item_num">
                        <input type="hidden" name="answer_id" id="answer_id">
                        <input type="hidden" name="target_id" id="target_id">
                        <input type="hidden" name="other_colors" id="other_colors">
                        <input type="hidden" name="count" id="count">
                        <input type="text" name="find" id="find" autocomplete="off">
                        <input type="text" name="number" id="number" autocomplete="off">
                    </form>
                    <button class="noTarget">
                        なし <br/>
                        0
                    </button>
                </aside>
            </main>
            ';
            return $htmlTest;
        }

        static function script($count){
            $htmlScript = '
            </body>
            <script>
                var count = '.$count.';
            </script>
            <script src="../../Components/js/circleNew.js" defer></script>
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