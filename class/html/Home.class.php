<?php

    class Home {
        
        static function home(){
            $htmlHome = '
                <main class="home">
                    <a href="../../Components/view/introduction.php">説明画面へ</a>
                    <a href="../../Components/view/circle_normal.php">パターン１</a>
                    <a href="../../Components/view/circle_plain.php">パターン２</a>
                    <a href="../../Components/view/circle_shadow.php">パターン３</a>
                    <a href="../../Components/view/circle_noClick.php">パターン4</a>
                </main>
            </body>
            </html>
            ';
            return $htmlHome;
        }

    }