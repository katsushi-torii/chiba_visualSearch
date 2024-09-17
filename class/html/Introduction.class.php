<?php

    class Introduction {

        static function introduction(){
            $htmlIntroduction = '
            <main class="introduction">
                <p>1から4までの手順を各テスト30回ずつ繰り返します。全て確認したらデモへ進んでください。</p>
                <section>
                    <figure>
                        <img src="../../img/start.png" alt="">
                        <blockquote>
                            <h4>1.</h4>
                            <p>見つけるべきターゲットが3秒間表示されます。この間にカーソルをターゲットに置いといてください。</p>
                        </blockquote>
                    </figure>
                    <figure>
                        <img src="../../img/greyed.png" alt="">
                        <blockquote>
                            <h4>2.</h4>
                            <p>0.5秒間ターゲットが消えます。</p>
                        </blockquote>
                    </figure>
                    <figure>
                        <img src="../../img/response.png" alt="">
                        <blockquote>
                            <h4>3.</h4>
                            <p>色の画像が円周上に出てきます。最初に提示されたターゲットと同じ色を見つけたら、回答ボタンをクリックしてください。ターゲットがない場合もあります。</p>
                        </blockquote>
                    </figure>
                    <figure>
                        <img src="../../img/answer.png" alt="">
                        <blockquote>
                            <h4>4.</h4>
                            <p>手順3で回答ボタンがクリックされたら画像が伏せられます。ターゲットがあった場合はその位置を、無かった場合はなしボタンをクリックしてください。</p>
                        </blockquote>
                    </figure>
                </section>';
            return $htmlIntroduction;
        }

        static function colorList($colorArray){
            $htmlColorList = '<aside>
            <section>
                <h3>登場する色一覧</h3>
                <ul>';
            foreach($colorArray as $color){
                $htmlColorList .= self::colorBox($color);
            }
            $htmlColorList .= '
                </ul>
            </section>';
            return $htmlColorList;
        }

        static function colorBox($color){
            $htmlColorBox = '<span class="'.$color.'"></span>';
            return $htmlColorBox;
        }

        static function next(){
            $htmlNext = '
                <aside>
                    <a href="demo.php">デモへ</a>
                </aside>
            </aside>
            ';
            return $htmlNext;
        }

        static function script(){
            $htmlScript = '
                </main>
            </body>
            <script>
            </script>
            </html>
            ';
            return $htmlScript;
        }
    }