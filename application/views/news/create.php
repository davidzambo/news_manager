<h2><?php echo $title; ?></h2>
<?php echo validation_errors(); ?>
<?php echo form_open('news/create'); ?>
  <fieldset class="form-horizontal">
    <label for="title" class="col-lg-2 control-label">Cím:</label>
    <div class="col-lg-10">
      <input type="input" name="title" class="form-control" required /><br />
    </div>

    <label for="tags" class="col-lg-2 control-label">Címkék:</label>
    <div class="col-lg-10">
      <input type="input" name="tags" class="form-control" required /><br />
    </div>

    <label for="body" class="col-lg-2 control-label">Cikk szövege:</label>
    <div class="col-lg-10">
      <textarea name="body" class="form-control" rows="10" required ></textarea><br />
    </div>

    <div class="col-lg-10 col-lg-offset-2">
        <button type="submit" name="submit" value="Új hír mentése" class="btn btn-primary"/>ÚJ HÍR MENTÉSE</button>
    </div>
  </fieldset>
</form>
