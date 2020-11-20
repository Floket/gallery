<?php
include('php/page/layout/navbar.php');
db::sendMail();
?>
<section class="contact">
    <div class="contact__wrapper">
                    <div class="contact__incon">
                        <a href="https://www.instagram.com/novvlad/" target="_blank">
                            <svg version="1.1"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                 viewBox="0 0 551.034 551.034" style="enable-background:new 0 0 551.034 551.034;" xml:space="preserve">
<g>

    <linearGradient id="SVGID_1_" gradientUnits="userSpaceOnUse" x1="275.517" y1="4.57" x2="275.517" y2="549.72" gradientTransform="matrix(1 0 0 -1 0 554)">
        <stop  offset="0" style="stop-color:#E09B3D"/>
        <stop  offset="0.3" style="stop-color:#C74C4D"/>
        <stop  offset="0.6" style="stop-color:#C21975"/>
        <stop  offset="1" style="stop-color:#7024C4"/>
    </linearGradient>
    <path style="fill:url(#SVGID_1_);" d="M386.878,0H164.156C73.64,0,0,73.64,0,164.156v222.722
		c0,90.516,73.64,164.156,164.156,164.156h222.722c90.516,0,164.156-73.64,164.156-164.156V164.156
		C551.033,73.64,477.393,0,386.878,0z M495.6,386.878c0,60.045-48.677,108.722-108.722,108.722H164.156
		c-60.045,0-108.722-48.677-108.722-108.722V164.156c0-60.046,48.677-108.722,108.722-108.722h222.722
		c60.045,0,108.722,48.676,108.722,108.722L495.6,386.878L495.6,386.878z"/>

    <linearGradient id="SVGID_2_" gradientUnits="userSpaceOnUse" x1="275.517" y1="4.57" x2="275.517" y2="549.72" gradientTransform="matrix(1 0 0 -1 0 554)">
        <stop  offset="0" style="stop-color:#E09B3D"/>
        <stop  offset="0.3" style="stop-color:#C74C4D"/>
        <stop  offset="0.6" style="stop-color:#C21975"/>
        <stop  offset="1" style="stop-color:#7024C4"/>
    </linearGradient>
    <path style="fill:url(#SVGID_2_);" d="M275.517,133C196.933,133,133,196.933,133,275.516s63.933,142.517,142.517,142.517
		S418.034,354.1,418.034,275.516S354.101,133,275.517,133z M275.517,362.6c-48.095,0-87.083-38.988-87.083-87.083
		s38.989-87.083,87.083-87.083c48.095,0,87.083,38.988,87.083,87.083C362.6,323.611,323.611,362.6,275.517,362.6z"/>

    <linearGradient id="SVGID_3_" gradientUnits="userSpaceOnUse" x1="418.31" y1="4.57" x2="418.31" y2="549.72" gradientTransform="matrix(1 0 0 -1 0 554)">
        <stop  offset="0" style="stop-color:#E09B3D"/>
        <stop  offset="0.3" style="stop-color:#C74C4D"/>
        <stop  offset="0.6" style="stop-color:#C21975"/>
        <stop  offset="1" style="stop-color:#7024C4"/>
    </linearGradient>
    <circle style="fill:url(#SVGID_3_);" cx="418.31" cy="134.07" r="34.15"/>
</g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
</svg>
                        </a>
                        <a href="https://www.facebook.com/NovVlad" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 112.196 112.196" style="enable-background:new 0 0 112.196 112.196;" xml:space="preserve">
<g>
    <circle cx="56.098" cy="56.098" r="56.098"></circle>
    <path style="fill:#FFFFFF;" d="M70.201,58.294h-10.01v36.672H45.025V58.294h-7.213V45.406h7.213v-8.34   c0-5.964,2.833-15.303,15.301-15.303L71.56,21.81v12.51h-8.151c-1.337,0-3.217,0.668-3.217,3.513v7.585h11.334L70.201,58.294z"></path>
</g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
</svg>                        </a>
                    </div>

        <span>Vladimir Novikov</span><br>
        <span>novvladua@gmail.com</span>
        <form action="/contact" method="post" id="formMail">
            <input type="hidden" name="type" value="mail">
            <div>
                <span>Name:</span>
                <input type="text" name="fio" placeholder="Name..*">
            </div>
            <div>
                <span>E-mail:</span>
                <input type="text" name="E-mail" placeholder="E-mail..*">
            </div>
            <div>
                <span>Message:</span>
                <textarea name="message" id="" cols="30" rows="10" placeholder="Message..*"></textarea>
            </div>
            <div class="flex-center">
                <div class="button-item">
                    <input class="submit" type="submit" value="Send">
                </div>
            </div>
        </form>
    </div>
</section>
<script src="script/valid.js"></script>