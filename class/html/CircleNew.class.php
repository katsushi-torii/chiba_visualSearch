<?php

    class Circle {
        
        static function target($pattern){
            $htmlTarget = '
            <main class="circle '.$pattern.'">
                <figure class="target">
                    <img src="../../img/bg_image.png" alt="">
                    <span class="answer"></span>
                    <button class="start"></button>
                </figure>
            ';
            return $htmlTarget;
        }

        static function circleList($pattern){
            $htmlList = '
                <section class="circumference">
                </section>
                <aside class="center">                
                    <form action="circle_'.$pattern.'.php" method="POST">
                        <input type="hidden" name="answer" id="answer">
                        <input type="hidden" name="selectedTarget" id="selectedTarget">
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
            return $htmlList;
        }

        static function script($count, $pattern){
            $htmlScript = '
            </body>
            <script>
                var count = '.$count.';
                var pattern = "'.$pattern.'";
            </script>
            <script src="../../Components/js/circleNew.js" defer></script>
            </html>
            ';
            return $htmlScript;
        }
    }