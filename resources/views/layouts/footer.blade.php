
    {{-- @vite('resources/js/app.js') --}}
    </body>
    <footer>
      <!-- Top Footer Area Start -->
      
    </footer>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
      $(document).ready(function() {
        var maxLength = 90; // Maximum number of characters
        var truncationText = '...'; // Truncation indicator

        $('.truncated-paragraph').each(function() {
          var content = $(this).text();
          if (content.length > maxLength) {
            $(this).text(content.substring(0, maxLength) + truncationText);
          }
        });
      });
    </script>
</html>