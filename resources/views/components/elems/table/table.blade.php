<div class="h-[70vh] max-h-[70vh] overflow-y-auto rounded min-h-[384px]  relative">
    <div class="absolute rounded-sm w-full top-0 left-0 bg-gray-800 -z-10 h-[70vh]"></div>
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        {{ $slot }}
        <script>
            function data(text) {
                return {
                    text: text,
                    isEditing: false,
                    toggleEditingState() {
                        this.isEditing = !this.isEditing;
                        if (this.isEditing) {
                            this.$nextTick(() => {
                                this.$refs.input.focus();
                            });
                        }
                    },
                    disableEditing() {
                        this.isEditing = false;
                    }
                };
            }

            function getInputValue() {
                return {
                    addListeners() {
                        let refs = this.$refs;
                        this.$el.querySelectorAll('li > input').forEach(el => el.addEventListener('click', (e) => {
                            refs.btn.innerHTML = el.value;
                        }))
                    }
                };
            }
        </script>
    </table>
</div>
<script>

</script>
