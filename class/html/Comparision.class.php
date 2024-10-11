<?php

    class Comparision {

        static function comparision(){
            $hmtlComparision = '
            <main class="comparision">
                <section>
                    <aside>
                        <span></span>
                        <h3>7</h3>
                    </aside>
                    <aside>
                        <span></span>
                        <h3>9</h3>
                    </aside>
                </section>
                <form action="comparision.php" method="POST">
                    <input type="text" name="number" id="number" autocomplete="off">
                    <input type="hidden" name="answers" id="answers">
                </form>
            </main>';
            return $hmtlComparision;
        }

        static function script(){
            $htmlScript = '
            </body>
            <script src="../../Components/js/comparision.js" defer></script>
            </html>
            ';
            return $htmlScript;
        }
    }