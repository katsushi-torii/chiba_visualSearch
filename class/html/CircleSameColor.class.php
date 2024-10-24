<?php

    class CircleSameColor {
        
        static function target(){
            $htmlTarget = '
            <main class="circle same">
                <figure class="target">
                    <span class="answer"></span>
                    <button class="start">+</button>
                </figure>
            ';
            return $htmlTarget;
        }

        static function circleList(){
            $htmlList = '
                <section class="circumference">
                </section>
                <aside class="center">                
                    <form action="circle_sameColor.php" method="POST">
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
                    <button class="noTarget">+</button>
                </aside>
            </main>
            ';
            return $htmlList;
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
    }