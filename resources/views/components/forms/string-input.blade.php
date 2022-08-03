<div>
    <input name="{{ $name }}" {{ !isset($type) ?'': "type=$type" }} {{ !isset($class) ?'': "class=$class" }} {{ !isset($id) ?'': "id=$id" }} {{ !isset($placeholder) ?'': "$placeholder" }}
        placeholder="" onchange="stringInputUpdated(this)" />

    <script>
        function stringInputUpdated(element) {
            let inputIndex = "{{ str_replace('[]', '', $name) }}";
            let rules = "{{ $rules }}"
            let data = {
                inputIndex: element.value,
                rules: {
                    inputIndex: rules
                }
            };
            fetch(
                "{{ route('realtime-input.validator') }}", {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/json"
                    },
                    body: JSON.stringify(data),
                }
            ).then(response => {
                // ✅ parse the response
                return response.json();
            }).then(json => {
                // ✅ remove old error response
                element.nextElementSibling.remove();
                // ✅ write the error response
                var tag = document.createElement("span");
                tag.style.color = 'red';
                var text = document.createTextNode(json.inputIndex);
                tag.appendChild(text);
                element.parentNode.insertBefore(tag, element.nextSibling);
            }).catch(error => {
                // ❎ handle the error
                console.log(error);
            });
        }
    </script>
</div>
