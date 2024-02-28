module.exports = {
    darkMode: 'class',

    theme: {
        extend: {
            colors: {
                primary: "#792e88",
                secondary: "#88A02E",
            },

            fontFamily: {
                body: ["Poppins", "Sans serif"],
            },

            fontSize: {
                xxs: '0.6rem'
            }
        },
    },

    content: [
        "./node_modules/flowbite/**/*.js",
        "./resources/views/**/*.blade.php"
    ],

    plugins: [
        require('flowbite/plugin'),
        require("@tailwindcss/typography"),
    ],
};
