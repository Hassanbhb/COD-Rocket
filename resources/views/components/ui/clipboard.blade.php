<div>
    <input type="text" value="CDSF435" id="myInput" class="hidden">
    <button data-tooltip-target="tooltip-dark"
        class="bg-primary/30 border-2 border-dashed border-primary py-2 px-5 rounded-lg font-bold" onclick="myFunction()">
        CDSF435
    </button>
    <div id="tooltip-dark" role="tooltip"
        class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
        Copy
        <div class="tooltip-arrow" data-popper-arrow></div>
    </div>
    <script>
        function myFunction() {
            // Get the text field
            var copyText = document.getElementById("myInput");

            // Select the text field
            copyText.select();
            copyText.setSelectionRange(0, 99999); // For mobile devices

            // Copy the text inside the text field
            navigator.clipboard.writeText(copyText.value);

            // Alert the copied text
            alert("Copied the text: " + copyText.value);
        }
    </script>
</div>
