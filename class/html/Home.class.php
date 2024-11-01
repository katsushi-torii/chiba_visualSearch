<?php

    class Home {
        
        static function home(){
            $htmlHome = '
                <main class="home">
                    <p>視覚探索課題</p>
                    <aside>
                        <a href="../../Components/view/introduction_comparision.php">比較テスト説明</a>
                        <a href="../../Components/view/comparision.php">比較テスト</a>
                    </aside>
                    <aside>
                        <a href="../../Components/view/introduction.php">本テスト説明</a>
                        <a href="../../Components/view/circle_noClick.php">本テスト</a>
                    </aside>
                    <aside>
                        <a href="../../Components/view/introduction_sameColor.php">補助テスト説明</a>
                        <a href="../../Components/view/circle_sameColor.php">補助テスト</a>
                    </aside>
                </main>
            </body>
            </html>
            ';
            return $htmlHome;
        }

    }