var followBtn = document.getElementsByName('un_follow_project')[0];
if (followBtn) {
    followBtn.addEventListener('mouseenter', () => {
        followBtn.value = 'Unfollow';
    });
    followBtn.addEventListener('mouseleave', () => {
        followBtn.value = 'Followed';
    });
}