<?php

    class Home {
        
        static function home(){
            $htmlHome = '
                <main class="home">
                    <a href="../../Components/view/introduction.php">説明画面へ</a>
                    <a href="../../Components/view/circle_normal.php">比較テスト</a>
                    <a href="../../Components/view/circle_noClick.php">本テスト</a>
                </main>
            </body>
            </html>
            ';
            return $htmlHome;
        }

    }