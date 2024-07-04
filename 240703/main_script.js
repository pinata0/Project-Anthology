document.addEventListener('DOMContentLoaded', () => {
    const sections = document.querySelectorAll('.section');
    let hoverEnabled = false;

    function revealSections() {
        sections.forEach((section, index) => {
            setTimeout(() => {
                section.classList.add('visible');
            }, index * 80);
        });
    }

    // 각 섹션에 등장 효과와 호버 이벤트를 함께 처리하는 함수
    const animateSections = () => {

        sections.forEach((section, index) => {
        // 호버 이벤트 리스너 추가
            section.addEventListener('mouseenter', () => {
                if (hoverEnabled) {
                    const otherSections = Array.from(sections).filter(s => s !== section);
                    section.classList.add('hover-effect');
                    otherSections.forEach(s => s.classList.add('filter-effect'));
                }
            });

            section.addEventListener('mouseleave', () => {
                if (hoverEnabled) {
                    sections.forEach(s => s.classList.remove('hover-effect'));
                    sections.forEach(s => s.classList.remove('filter-effect'));
                }
            });
            section.addEventListener('click', function() {
                var detailPageUrl = 'game_index.html';
                window.location.href = detailPageUrl;
            });
        });
    };

    window.addEventListener("scroll", revealSections);
    revealSections();
        // 초기 1초 동안 호버 이벤트 비활성화
    setTimeout(() => {
        hoverEnabled = true;
    }, 1000); 
    animateSections();

});
