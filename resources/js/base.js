module.exports = {
    methods: {
        __(key, replace = {}) {
            let split = key.split(".");
            if (split.length > 1) {
                var translation = this.$page.props.language[split[0]][split[1]]
                    ? this.$page.props.language[split[0]][split[1]]
                    : key;
            } else {
                var translation = this.$page.props.language[key]
                    ? this.$page.props.language[key]
                    : key
            }

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