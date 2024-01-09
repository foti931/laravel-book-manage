<div x-data="inputFormHandler()" class="my-2">
    <template x-for="field,i in fields" :key="i">
        <div class="w-full flex mb-5">
            <label :for="field.id" class="w-full border rounded-md bg-white py-2 px-4 mr-2">
                <input type="file" accept="image/*" :id="field.id" name="images[]" @change="fields[i].file = $event.target.files[0]" class="sr-only">
                <span class="text-green-700" x-text="field.file ? field.file.name : '画像を選択'"></span>
            </label>
            <button type="reset" @click="removeField(i)">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-8 h-8 hover:fill-red-600">
                    <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25Zm-1.72 6.97a.75.75 0 1 0-1.06 1.06L10.94 12l-1.72 1.72a.75.75 0 1 0 1.06 1.06L12 13.06l1.72 1.72a.75.75 0 1 0 1.06-1.06L13.06 12l1.72-1.72a.75.75 0 1 0-1.06-1.06L12 10.94l-1.72-1.72Z" clip-rule="evenodd" />
                </svg>
            </button>
        </div>
    </template>

    <template x-if="fields.length < 4" class="flex mt-4">
        <button type="button" @click="addField()" class="inline-flex justify-center border rounded-md border-transparent font-medium bg-blue-400 text-sm text-white py-2 px-4">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                <path fill-rule="evenodd" d="M1.5 6a2.25 2.25 0 0 1 2.25-2.25h16.5A2.25 2.25 0 0 1 22.5 6v12a2.25 2.25 0 0 1-2.25 2.25H3.75A2.25 2.25 0 0 1 1.5 18V6ZM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0 0 21 18v-1.94l-2.69-2.689a1.5 1.5 0 0 0-2.12 0l-.88.879.97.97a.75.75 0 1 1-1.06 1.06l-5.16-5.159a1.5 1.5 0 0 0-2.12 0L3 16.061Zm10.125-7.81a1.125 1.125 0 1 1 2.25 0 1.125 1.125 0 0 1-2.25 0Z" clip-rule="evenodd" />
            </svg>
            <span>画像を追加</span>
        </button>
    </template>
</div>

<script>
    function inputFormHandler(){
        return {
            fields:[],
            addField() {
                const i = this.fields.length;
                this.fields.push({
                    file:'',
                    id: `input-image-${i}`
                });
            },
            removeField(index){
                this.fields.splice(index,1);
            }
        }
    }
</script>
