<?php

    class Distance {
        
        static function distance(){
            $htmlDistance = '
            <main class="distance">
                <section>
                    <figure>
                        <img src="../../img/bg_image.png" alt="">
                        <aside class="stimulate"></aside>
                    </figure>
                    <figure>
                        <img src="../../img/bg_image.png" alt="">
                        <aside></aside>
                    </figure>
                </section>
                <aside>
                    <button onclick="up()">近</button>
                    <button onclick="down()">遠</button>
                </aside>
            </main>
            ';
            return $htmlDistance;
        }

        static function script(){
            $htmlScript = '
                </body>
                <script src="../../Components/js/distance.js" defer></script>
            </hmtl>
            ';
            return $htmlScript;
        }
    }