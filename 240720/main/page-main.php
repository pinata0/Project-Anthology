<?php
// page-main.php
/*
Template Name: Main Page
*/
get_header();
?>

<div class="container">
    <div class="section section0" tabindex="0">
        <img src="<?php echo get_template_directory_uri(); ?>/page/page-main/images/black.jpeg" alt="Image 0">
        <span></span>
        <div class="box">
            <h1>엔솔로지</h1>
            <h2>합작. 시나 소설 등 문학 작품을 하나의 작품집으로 모아 출판한 것으로, 일정한 주제를 정하고 그 주제에 따른 여러 작가들의 작품을 모아 출판한다</h2>
            <h3>너, 우리와 함께해볼래?</h3>
        </div>
    </div>
    <div class="section section1" tabindex="0" data-url="../c/1/game_index.html">
        <img src="<?php echo get_template_directory_uri(); ?>/page/page-main/images/main_1st.jpg" alt="Image 1">
        <span>게임</span>
        <div class="box">
            <h1>게임</h1>
            <h2>동방 프로젝트의 공식 게임 시리즈 일람과 플레이어블 캐릭터, 스테이지, 보스 등을 나열하는 문서이다</h2>
            <h3>동방홍마향, 동방요요몽, 동방췌몽상...</h3>
        </div>
    </div>
    <div class="section section2" tabindex="0" data-url="../c/2/info_index.html">
        <img src="<?php echo get_template_directory_uri(); ?>/page/page-main/images/main_2nd.jpg" alt="Image 2">
        <span>정보</span>
        <div class="box">
            <h1>정보</h1>
            <h2>동방 프로젝트(東方Project)는 ZUN의 1인 동인 서클인 상하이 앨리스 환악단(上海アリス幻樂団)에서 만든 동인 게임 시리즈이다</h2>
            <h3>동방 프로젝트는 동인 게임 역사상 가장 성공한 게임이다.</h3>
        </div>
    </div>
    <div class="section section3" tabindex="0" data-url="../c/3/novel_index.html">
        <img src="<?php echo get_template_directory_uri(); ?>/page/page-main/images/main_3th.jpg" alt="Image 3">
        <span>소설</span>
        <div class="box">
            <h1>소설</h1>
            <h2>동방 프로젝트는 많은 소설이 존재한다</h2>
            <h3>동방자향화, 동방향림당, 동방맹월초...</h3>
        </div>
    </div>
    <div class="section section4" tabindex="0" data-url="../c/4/game_index.html">
        <img src="<?php echo get_template_directory_uri(); ?>/page/page-main/images/main_4th.jpg" alt="Image 4">
        <span>만화</span>
        <div class="box">
            <h1>만화</h1>
            <h2>동방 프로젝트는 많은 만화가 존재한다</h2>
            <h3>동방삼월정, 동방자가선, 동방취접화...</h3>
        </div>
    </div>
    <div class="section section5" tabindex="0" data-url="../c/5/game_index.html">
        <img src="<?php echo get_template_directory_uri(); ?>/page/page-main/images/main_5th.jpg" alt="Image 5">
        <span>그림</span>
        <div class="box">
            <h1>그림</h1>
            <h2>동방 프로젝트를 주제로 삼은 많은 일러스트가 존재한다</h2>
            <h3>환상유현암, 일러스트...</h3>
        </div>
    </div>
    <div class="section section6" tabindex="0" data-url="../c/6/game_index.html">
        <img src="<?php echo get_template_directory_uri(); ?>/page/page-main/images/main_6th.jpg" alt="Image 6">
        <span>노래</span>
        <div class="box">
            <h1>음악</h1>
            <h2>동방 프로젝트를 주제로 삼은 많은 음악이 존재한다</h2>
            <h3>원곡, 어레인지, 2차창작, 뮤비...</h3>
        </div>
    </div>
    <div class="section section7" tabindex="0" data-url="../c/7/game_index.html">
        <img src="<?php echo get_template_directory_uri(); ?>/page/page-main/images/main_7th.jpg" alt="Image 7">
        <span>커뮤니티</span>
        <div class="box">
            <h1>커뮤니티</h1>
            <h2>동방과 관련된 이야기들을 해볼 수 있는 창이다</h2>
            <h3>자유게시판, 질문게시판, 토론게시판, 모집게시판, 유머게시판...</h3>
        </div>
    </div>
    <div class="section section8" tabindex="0" data-url="../c/8/game_index.html">
        <img src="<?php echo get_template_directory_uri(); ?>/page/page-main/images/main_8th.jpg" alt="Image 8">
        <span>셀럽</span>
        <div class="box">
            <h1>셀럽</h1>
            <h2>동방계에서 유명한 인물들을 소개하는 창이다</h2>
            <h3>ZUN!!!!!!!!!!!!!!!!!!!!!1</h3>
        </div>
    </div>
    <div class="section section9" tabindex="0" data-url="../c/9/game_index.html">
        <img src="<?php echo get_template_directory_uri(); ?>/page/page-main/images/main_9th.jpg" alt="Image 9">
        <span>밈</span>
        <div class="box">
            <h1>밈</h1>
            <h2>동방 프로젝트를 주제로 삼은 많은 밈들이 존재한다</h2>
            <h3>요우무, 마리사, 아야, 유우코, 타카네, 카나코...</h3>
        </div>
    </div>
</div>

<?php get_footer(); ?>