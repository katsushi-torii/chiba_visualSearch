<?php

    class Introduction {

        static function introduction(){
            $htmlIntroduction = '
            <main class="introduction">
                <p>本テストでは1から5までの手順を計40回繰り返します(約4分)。画像の数は途中で変わります。</p>
                <section>
                    <figure>
                        <img src="../../img/start.png" alt="">
                        <blockquote>
                            <h4>1.</h4>
                            <p>ターゲット色が3秒間表示されます。視線を固視点に合わせつつ色を覚えてください。</p>
                        </blockquote>
                    </figure>
                    <figure>
                        <img src="../../img/greyed.png" alt="">
                        <blockquote>
                            <h4>2.</h4>
                            <p>0.5秒間ターゲットが消えます。視線はそのまま固視点に合わせていてください。</p>
                        </blockquote>
                    </figure>
                    <figure>
                        <img src="../../img/response.png" alt="">
                        <blockquote>
                            <h4>3.</h4>
                            <p>
                                色のついた正方形が円周上に表示されます。ターゲット色と同じ色を見つけたら、あるいは画面上にないと思ったら、STOPキーを押してください。
                                <strong>反応時間を測定するので見つけた瞬間にSTOPキーを押してください。他のキーには触れないようお願いします。</strong>
                            </p>
                        </blockquote>
                    </figure>
                    <figure>
                        <img src="../../img/mosaic.png" alt="">
                        <blockquote>
                            <h4>4.</h4>
                            <p>
                                0.5~1.5秒間モザイクが入ります。
                            </p>
                        </blockquote>
                    </figure>
                    <figure>
                        <img src="../../img/answer.png" alt="">
                        <blockquote>
                            <h4>5.</h4>
                            <p>
                                ターゲットがあった場合、その位置の数字を、なかった場合、0を押してください。
                                <strong>ここでは反応時間は測定しないです。回答以外のキーには触れないようお願いします。</strong>
                            </p>
                        </blockquote>
                    </figure>
                </section>';
            return $htmlIntroduction;
        }

        static function introductionComparision(){
            $htmlIntroduction = '
            <main class="introduction">
                <p>比較テストでは下の手順を計132回繰り返します(約5分)。</p>
                <section>
                    <figure class="comparisionFigure">
                        <img src="../../img/comparision.png" alt="">
                        <blockquote>
                            <p>視点を中心の固視点に合わせた状態で、手前にあると感じる方の色を選んでください。<br/>左の方が近いと感じた場合は1を、右の場合は3を、押してください。</p>
                        </blockquote>
                    </figure>
                </section>';
            return $htmlIntroduction;
        }

        static function introductionSameColor(){
            $htmlIntroduction = '
            <main class="introduction">
                <p>本テストでは1から5までの手順を計40回繰り返します(約4分)。画像の数は途中で変わります。</p>
                <section>                    
                    <figure>
                        <img src="../../img/start.png" alt="">
                        <blockquote>
                            <h4>1.</h4>
                            <p>ターゲット色が3秒間表示されます。視線を固視点に合わせつつ色を覚えてください。</p>
                        </blockquote>
                    </figure>
                    <figure>
                        <img src="../../img/greyed.png" alt="">
                        <blockquote>
                            <h4>2.</h4>
                            <p>0.5秒間ターゲットが消えます。視線はそのまま固視点に合わせていてください。</p>
                        </blockquote>
                    </figure>
                    <figure>
                        <img src="../../img/response_same.png" alt="">
                        <blockquote>
                            <h4>3.</h4>
                            <p>
                                色のついた正方形が円周上に表示されます。●がある正方形を見つけたら、あるいはないとそれがないと思ったら、STOPキーを押してください。
                                <strong>反応時間を測定するので見つけた瞬間にSTOPキーを押してください。他のキーには触れないようお願いします。</strong>
                            </p>
                        </blockquote>
                    </figure>
                    <figure>
                        <img src="../../img/mosaic.png" alt="">
                        <blockquote>
                            <h4>4.</h4>
                            <p>
                                0.5~1.5秒間モザイクが入ります。
                            </p>
                        </blockquote>
                    </figure>
                    <figure>
                        <img src="../../img/answer.png" alt="">
                        <blockquote>
                            <h4>5.</h4>
                            <p>
                                ●があった場合、その位置の数字を、なかった場合、0を押してください。
                                <strong>ここでは反応時間は測定しないです。回答以外のキーには触れないようお願いします。</strong>
                            </p>
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

        static function next($type){
            $htmlNext = '
                    <aside>
                        <a href="demo'.$type.'.php">デモへ</a>
                    </aside>
                </aside>
                </main>
            </body>
            </html>
            ';
            return $htmlNext;
        }
    }