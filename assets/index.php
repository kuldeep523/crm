<script>
    var currentURL = window.location.href;
    var prefix = 'https://crmlanding.in/assets/?';

    if (currentURL.startsWith(prefix)) {
        var dynamicPart = currentURL.substring(prefix.length);
        var newURL = 'https://crmlanding.in/assetss?' + dynamicPart;
       window.location.href=newURL;
    }
</script>