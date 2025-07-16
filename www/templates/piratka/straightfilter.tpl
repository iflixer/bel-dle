<div id="sfilter-container" class="sfilter-container">
    <a href="?flx_sort=date" class="sfilter-link">По дате добавления</a>
    <a href="?flx_sort=stat_popular" class="sfilter-link">Популярное</a>
    <a href="?flx_sort=stat_now" class="sfilter-link">Сейчас смотрят</a>
    <a href="?flx_sort=rating_kp" class="sfilter-link">Рейтинг КП</a>
    <a href="?flx_sort=rating_imdb" class="sfilter-link">Рейтинг IMDB</a>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const surlParams = new URLSearchParams(window.location.search);
        const sortParam = surlParams.get('flx_sort');
        if (sortParam) {
            const selector = '.sfilter-link[href="?flx_sort=' + sortParam + '"]';
            const element = document.querySelector(selector);
            if (element) {
                element.classList.add('active');
            }
        }
    });
</script>

