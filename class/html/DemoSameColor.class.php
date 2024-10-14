<?php

    class DemoSameColor {
        static function demoTest(){
            $htmlTest = '
            <main class="circle same">
                <figure class="target">
                    <span class="answer"></span>
                    <button class="start">+</button>
                </figure>
                <section class="circumference">
                </section>
                <aside class="center">
                    <form action="demo_sameColor.php" method="POST">
                        <input type="hidden" name="answer" id="answer">
                        <input type="hidden" name="check" id="check">
                        <input type="hidden" name="responseTime" id="responseTime">
                        <input type="hidden" name="item_num" id="item_num">
                        <input type="hidden" name="answer_id" id="answer_id">
                        <input type="hidden" name="target_id" id="target_id">
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
            <script src="../../Components/js/circleSame.js" defer></script>
            </html>
            ';
            return $htmlScript;
        }

        static function demoResult($selectedId, $targetId, $result){
            $htmlDemoResult = '
                <main class="demo">
                    <section>
                        <figure>
                            <span class="">'.$selectedId.'</span>
                            <figcaption>
                                ターゲット番号
                            </figcaption>
                        </figure>
                        <figure>
                            <span class="">'.$targetId.'</span>
                            <figcaption>
                                選んだ番号
                            </figcaption>
                        </figure>
                    </section>
                    <h3>'.$result.'</h3>
                    <aside>
                        <a href="introduction_sameColor.php">教示画面</a>
                        <a href="demo_sameColor.php">もう一度</a>
                        <a href="home.php">理解した</a>
                    </aside>
                </main>
            </body>
            </html>
            ';
            return $htmlDemoResult;
        }
    }