<?php

    class Introduction {

        static function introduction(){
            $htmlIntroduction = '
            <main class="introduction">
                <p>本テストでは1から4までの手順を計240回繰り返します。</p>
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
                            <p>0.5秒間ターゲットが消えます。視線はそのままでお願いします。</p>
                        </blockquote>
                    </figure>
                    <figure>
                        <img src="../../img/response.png" alt="">
                        <blockquote>
                            <h4>3.</h4>
                            <p>
                                色の画像が円周上に出てきます。ターゲット色と同じ色を見つけたら、あるいは画面上にないと思ったら、Enterキーを押してください。
                
                                <strong>反応時間を測定します。Enter以外のキーには触れないようお願いします。</strong>
                            </p>
                        </blockquote>
                    </figure>
                    <figure>
                        <img src="../../img/answer.png" alt="">
                        <blockquote>
                            <h4>4.</h4>
                            <p>
                                ターゲットがあった場合、その位置の数字を、なかった場合、0を押してください。
                                <strong>反応時間は測定しないです。数字以外のキーには触れないようお願いします。</strong>
                            </p>
                        </blockquote>
                    </figure>
                </section>';
            return $htmlIntroduction;
        }

        static function introductionComparision(){
            $htmlIntroduction = '
            <main class="introduction">
                <p>比較テストでは下の手順を計132回繰り返します。(約４分)</p>
                <section>
                    <figure>
                        <img src="../../img/comparision.png" alt="">
                        <blockquote>
                            <p>近いと感じる色を選んでください。左の方が近いと感じた場合、1を、右の場合は3を押してください。</p>
                        </blockquote>
                    </figure>
                </section>';
            return $htmlIntroduction;
        }

        static function introductionSameColor(){
            $htmlIntroduction = '
            <main class="introduction">
                <p>本テストでは1から4までの手順を計60回繰り返します。(約６分)</p>
                <section>
                    <figure>
                        <img src="../../img/start_same.png" alt="">
                        <blockquote>
                            <h4>1.</h4>
                            <p>色が3秒間表示されます。視線を固視点に合わせつつ色を覚えてください。</p>
                        </blockquote>
                    </figure>
                    <figure>
                        <img src="../../img/greyed.png" alt="">
                        <blockquote>
                            <h4>2.</h4>
                            <p>0.5秒間ターゲットが消えます。視線はそのままでお願いします。</p>
                        </blockquote>
                    </figure>
                    <figure>
                        <img src="../../img/response_same.png" alt="">
                        <blockquote>
                            <h4>3.</h4>
                            <p>
                                色の画像が円周上に出てきます。●がある図形を見つけたら、あるいはそれがないと思ったら、Enterキーを押してください。
                                <strong>反応時間を測定します。Enter以外のキーには触れないようお願いします。</strong>
                            </p>
                        </blockquote>
                    </figure>
                    <figure>
                        <img src="../../img/answer.png" alt="">
                        <blockquote>
                            <h4>4.</h4>
                            <p>
                                ●があった場合、その位置の数字を、なかった場合、0を押してください。
                                <strong>反応時間は測定しないです。数字以外のキーには触れないようお願いします。</strong>
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