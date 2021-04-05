<div class="form-row">
    <div class="col-sm mt-1">
        <div class="input-group mb-6">
          <input type="text" class="form-control border border-dark rounded-left " placeholder="Троичное число" name="octal_number_system" value="{{ $octal_number_system ?? old('octal_number_system', '')}}" class="form-control" aria-describedby="basic-addon2">
            <div class="input-group-append">
                <button class="btn btn-outline-secondary border border-dark rounded-right"  type="submit" name='convert8to10' value="converter" id="converter" class="btn btn-outline-secondary btn-block" class="form-control">
                    Преобразовать
                </button>
            </div>
        </div>
    </div>
</div>



