module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        fontFamily: {
            sans: ['Graphik', 'sans-serif'],
            serif: ['Merriweather', 'serif'],
        },
        extend: {
            typography: {
                DEFAULT: {
                    css: {
                        p: {
                            color: 'black',
                        },
                        a: {
                            color: 'text-pink-600'
                        }
                    },
                },
            },
        },
    },
    plugins: [
        require('@tailwindcss/typography'),
        require('@tailwindcss/forms'),
    ],
}
