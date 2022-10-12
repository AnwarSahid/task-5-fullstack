module.exports = {
    purge: [
        './resources/views/**/*.blade.php',
        './resources/css/**/*.css',
    ],
    theme: {
        extend: {
            colors: {
                'investree': '#8CC63E',
                'invesblue': '#194175',
            },
        }
    },
    variants: {},
    plugins: [
        require('@tailwindcss/ui'),
        require('@tailwindcss/typography'),
    ]
}
