module.exports = {
    methods: {
        __(key, replace = {}) {
            var translation = this.$page.props.language[key]
                ? this.$page.props.language[key]
                : key

            Object.keys(replace).forEach(function (key) {
                translation = translation.replace(':' + key, replace[key])
            });

            return translation
        },
        __n(key, number, replace = {}) {
            var options = key.split('|');

            key = options[1];
            if (number == 1) {
                key = options[0];
            }

            return tt(key, replace);
        },
    },
}