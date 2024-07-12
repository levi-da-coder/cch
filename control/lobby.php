<?php
if(!defined('BOOM')){
	die();
}
include('header.php');
?>
<div class="cch__extraSpace">
    <br />
    <br />
</div>
<div id="page_content">
    <div id="page_global">
        <div class="page_indata">
            <div id="page_wrapper">
                <!-- <div class="page_element">

                </div> -->
                <div class="cch__filterHover ">
                    <div class="filterInner">
                        <div id="mfilterAll" onclick="applyMLobbyFilter('all')"
                            style="border: 1px solid #2ecc71; color: #2ecc71;">
                            <i class="fa fa-solid fa-reply-all" style=""></i>
                            <p>All</p>
                        </div>
                        <div id="mfilterPopular" onclick="applyMLobbyFilter('popular')">
                            <i class="fa fa-solid fa-star"></i>
                            <p>Popular</p>
                        </div>
                        <div id="mfilterCountry" onclick="applyMLobbyFilter('country')">
                            <i class="fa fa-solid fa-flag"></i>
                            <p>Country</p>
                        </div>
                        <div id="mfilterDating" onclick="applyMLobbyFilter('dating')">
                            <i class="fa fa-solid fa-heart"></i>
                            <p>Dating</p>
                        </div>
                        <div id="mfilterFriendship" onclick="applyMLobbyFilter('friendship')">
                            <i class="fa fa-solid fa-users"></i>
                            <p>Friendship</p>
                        </div>
                    </div>
                </div>
                <div class="page_element" id="popular__rooms">
                    <h3>Popular Rooms</h3>

                    <div id="container_rooms">
                        <?php echo getRoomList(1, "popular"); ?>
                    </div>
                </div>
                <div class="page_element" id="country__rooms">
                    <h3>Country Rooms</h3>

                    <div id="container_rooms">
                        <?php echo getRoomList(1, "country"); ?>
                    </div>
                </div>
                <div class="page_element" id="dating__rooms">
                    <h3>Dating Rooms</h3>

                    <div id="container_rooms">
                        <?php echo getRoomList(1, "dating"); ?>
                    </div>
                </div>
                <div class="page_element" id="friendship__rooms">
                    <h3>Friendship Rooms</h3>

                    <div id="container_rooms">
                        <?php echo getRoomList(1, "friendship"); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script data-cfasync="false">
var curPage = 'lobby';
</script>
<script data-cfasync="false" src="js/function_lobby.js<?php echo $bbfv; ?>"></script>