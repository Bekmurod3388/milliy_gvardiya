<div class="mb-3">
    <label for="city">Viloyatlar</label>
    <div class="d-flex">
        <select name="city" id="city" class="form-control form-select">
            @foreach($regions as $item)
                <option value="{{ $item->id }}">{{ $item->name }}</option>
            @endforeach
        </select>
        <button type="button" class="btn btn-success" data-bs-toggle="modal"
                data-bs-target="#exampleModal">
            <i class="bi bi-plus-lg"></i>
        </button>
        <button type="button" class="btn btn-danger"><i class="bi bi-trash"></i></button>
    </div>
</div>
<script>
console.log(@json($districts));
</script>

