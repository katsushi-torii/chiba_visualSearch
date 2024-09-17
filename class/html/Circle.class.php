<?php

    class Circle {
        
        static function target($pattern){
            $htmlTarget = '
            <main class="circle '.$pattern.'">
                <figure class="target">
                    <img src="../../img/bg_image_'.$pattern.'.png" alt="">
                    <span class="answer"></span>
                    <button class="start"></button>
                </figure>                    
                <form action="circle_'.$pattern.'.php" method="POST" hidden>
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
    }