<div class="import-db-columns" id="importDbColumns">
    <ul>
        <?php foreach ($importDbColumns as $column => $label): ?>
            <?php
                $isRequired = $this->importIsColumnRequired($column);
                $iconName = $isRequired ? 'icon-asterisk' : 'icon-link';
            ?>
            <li
                class="<?= $isRequired ? 'is-required' : '' ?>"
                data-column-name="<?= e($column) ?>">
                <span>
                    <i class="column-icon <?= $iconName ?>"></i>
                    <?= e(__($label)) ?>
                </span>
                <input type="hidden" data-column-match-input />
            </li>
        <?php endforeach ?>
    </ul>
</div>

<script>
    addEventListener('render', function() {
        $.oc.importBehavior.bindColumnSorting();
    });
</script>
