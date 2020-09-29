<table class="results-table type-3">
    <tr>
        <td class="group-name" colspan="2">@lang('cytology.label_examination_title')</td>
    </tr>
    <tr class="no-border-bottom">
        <td class="group-by-papanikolau" colspan="2">
            <span class="group-label">@lang('cytology.label_group_papanikolau'):</span>
            <span class="spacer">&nbsp;</span>
            <span class="group-item">@lang('cytology.label_group_1')</span>
            <span class="group-item-result">
                {!! $result['result_I'] ? '<i class="fa fa-check-square-o checked"></i>' : '<i class="fa fa-square-o"></i>' !!}
            </span>
            <span class="spacer">&nbsp;</span>

            <span class="group-item">@lang('cytology.label_group_2')</span>
            <span class="group-item-result">
                {!! $result['result_II'] ? '<i class="fa fa-check-square-o checked"></i>' : '<i class="fa fa-square-o"></i>' !!}
            </span>
            <span class="spacer">&nbsp;</span>

            <span class="group-item">@lang('cytology.label_group_3')</span>
            <span class="group-item-result">
                {!! $result['result_III'] ? '<i class="fa fa-check-square-o checked"></i>' : '<i class="fa fa-square-o"></i>' !!}
            </span>
            <span class="spacer">&nbsp;</span>

            <span class="group-item">@lang('cytology.label_group_3a')</span>
            <span class="group-item-result">
                {!! $result['result_IIIA'] ? '<i class="fa fa-check-square-o checked"></i>' : '<i class="fa fa-square-o"></i>' !!}
            </span>
            <span class="spacer">&nbsp;</span>

            <span class="group-item">@lang('cytology.label_group_3b')</span>
            <span class="group-item-result">
                {!! $result['result_IIIB'] ? '<i class="fa fa-check-square-o checked"></i>' : '<i class="fa fa-square-o"></i>' !!}
            </span>
            <span class="spacer">&nbsp;</span>

            <span class="group-item">@lang('cytology.label_group_4')</span>
            <span class="group-item-result">
                {!! $result['result_IV'] ? '<i class="fa fa-check-square-o checked"></i>' : '<i class="fa fa-square-o"></i>' !!}
            </span>
            <span class="spacer">&nbsp;</span>

            <span class="group-item">@lang('cytology.label_group_5')</span>
            <span class="group-item-result">
                {!! $result['result_V'] ? '<i class="fa fa-check-square-o checked"></i>' : '<i class="fa fa-square-o"></i>' !!}
            </span>
            <span class="spacer">&nbsp;</span>
        </td>
    </tr>

    <tr class="no-border-top-bottom">
        <td class="group-label" >@lang('cytology.label_bethesda'):</td>
        <td>&nbsp;</td>
    </tr>

    <tr class="no-border-top-bottom">
        <td class="group-label-light" >@lang('cytology.label_adequacy_cytologic_smear'):</td>
        <td>&nbsp;</td>
    </tr>

    <tr class="no-border-top-bottom">
        <td class="" colspan="2">
            <span class="group-item-result">
                {!! $result['result_satisfactory'] ? '<i class="fa fa-check-square-o checked"></i>' : '<i class="fa fa-square-o"></i>' !!}
            </span>
            @lang('cytology.label_satisfactory')</td>
    </tr>

    <tr class="no-border-top-bottom">
        <td class="">
            <span class="group-item-result">
                {!! $result['result_satisfactory_no'] ? '<i class="fa fa-check-square-o checked"></i>' : '<i class="fa fa-square-o"></i>' !!}
            </span>
            @lang('cytology.label_satisfactory_but_limited'):
        </td>
        <td>
            <span class="group-item-result">
                {!! $result['result_blood'] ? '<i class="fa fa-check-square-o checked"></i>' : '<i class="fa fa-square-o"></i>' !!}
            </span>
            <span class="group-item-bethesda">@lang('cytology.label_blood')</span>
            <span class="spacer">&nbsp;</span>

            <span class="group-item-result">
                {!! $result['result_microorganisms'] ? '<i class="fa fa-check-square-o checked"></i>' : '<i class="fa fa-square-o"></i>' !!}
            </span>
            <span class="group-item-bethesda">@lang('cytology.label_microorganisms')</span>
            <span class="spacer">&nbsp;</span>

            <span class="group-item-result">
                {!! $result['result_leukocytes'] ? '<i class="fa fa-check-square-o checked"></i>' : '<i class="fa fa-square-o"></i>' !!}
            </span>
            <span class="group-item-bethesda">@lang('cytology.label_leukocytes')</span>
        </td>
    </tr>

    <tr class="no-border-top-bottom">
        <td class="align-top">
            <span class="group-item-result">
                {!! $result['result_unsatisfactory'] ? '<i class="fa fa-check-square-o checked"></i>' : '<i class="fa fa-square-o"></i>' !!}
            </span>
            @lang('cytology.label_unsatisfactory'):
        </td>
        <td>
            <div class="group-items">
                <span class="group-item-result">
                    {!! $result['result_bad_fixation'] ? '<i class="fa fa-check-square-o checked"></i>' : '<i class="fa fa-square-o"></i>' !!}
                </span>
                <span class="group-item-bethesda">@lang('cytology.label_bad_fixation')</span>
            </div>
            <div class="group-items">
                <span class="group-item-result">
                    {!! $result['result_lack_of_flat_cells'] ? '<i class="fa fa-check-square-o checked"></i>' : '<i class="fa fa-square-o"></i>' !!}
                </span>
                <span class="group-item-bethesda">@lang('cytology.label_lack_of_flat_cells')</span>
            </div>
            <div class="group-items">
                <span class="group-item-result">
                    {!! $result['result_lack_of_endocervical_elements'] ? '<i class="fa fa-check-square-o checked"></i>' : '<i class="fa fa-square-o"></i>' !!}
                </span>
                <span class="group-item-bethesda">@lang('cytology.label_lack_of_endocervical_elements')</span>
            </div>
            <div class="group-items">
                <span class="group-item-result">
                    {!! $result['result_cylindrical_cells'] ? '<i class="fa fa-check-square-o checked"></i>' : '<i class="fa fa-square-o"></i>' !!}
                </span>
                <span class="group-item-bethesda">@lang('cytology.label_cylindrical_cells')</span>
            </div>
            <div class="group-items">
                <span class="group-item-result">
                    {!! $result['result_metaplastic_cells'] ? '<i class="fa fa-check-square-o checked"></i>' : '<i class="fa fa-square-o"></i>' !!}
                </span>
                <span class="group-item-bethesda">@lang('cytology.label_metaplastic_cells')</span>
            </div>
        </td>
    </tr>

    <tr class="no-border-top-bottom">
        <td class="group-label">@lang('cytology.label_categories'):</td>
        <td>&nbsp;</td>
    </tr>

    <tr class="no-border-top-bottom">
        <td class="" colspan="2">
            <span class="group-item-result">
                {!! $result['result_cell_rate'] ? '<i class="fa fa-check-square-o checked"></i>' : '<i class="fa fa-square-o"></i>' !!}
            </span>
            <strong>@lang('cytology.label_category_a')</strong></td>
    </tr>

    <tr class="no-border-top-bottom">
        <td class="" colspan="2">
            <span class="group-item-result">
                {!! $result['result_cellular_changes'] ? '<i class="fa fa-check-square-o checked"></i>' : '<i class="fa fa-square-o"></i>' !!}
            </span>
            <strong>@lang('cytology.label_category_b')</strong>:
        </td>
    </tr>

    <tr class="no-border-top-bottom">
        <td class="" colspan="2">
            <div class="group-columns">
                <div class="group-items-column-5">
                    <span class="group-item-result">
                        {!! $result['result_trihomoni'] ? '<i class="fa fa-check-square-o checked"></i>' : '<i class="fa fa-square-o"></i>' !!}
                    </span>
                    <span class="group-item-bethesda">@lang('cytology.label_trihomoni')</span>
                </div>
                <div class="group-items-column-5">
                    <span class="group-item-result">
                        {!! $result['result_candida'] ? '<i class="fa fa-check-square-o checked"></i>' : '<i class="fa fa-square-o"></i>' !!}
                    </span>
                    <span class="group-item-bethesda">@lang('cytology.label_candida')</span>
                </div>
                <div class="group-items-column-5">
                    <span class="group-item-result">
                        {!! $result['result_clue_cells'] ? '<i class="fa fa-check-square-o checked"></i>' : '<i class="fa fa-square-o"></i>' !!}
                    </span>
                    <span class="group-item-bethesda">@lang('cytology.label_clue_cells')</span>
                </div>
                <div class="group-items-column-5">
                    <span class="group-item-result">
                        {!! $result['result_cocci'] ? '<i class="fa fa-check-square-o checked"></i>' : '<i class="fa fa-square-o"></i>' !!}
                    </span>
                    <span class="group-item-bethesda">@lang('cytology.label_cocci')</span>
                </div>
                <div class="group-items-column-5">
                    <span class="group-item-result">
                        {!! $result['result_bacteria'] ? '<i class="fa fa-check-square-o checked"></i>' : '<i class="fa fa-square-o"></i>' !!}
                    </span>
                    <span class="group-item-bethesda">@lang('cytology.label_bacteria')</span>
                </div>
            </div>

            <div class="group-columns">
                <div class="group-items-column-5">
                    <span class="group-item-result">
                        {!! $result['result_hsv'] ? '<i class="fa fa-check-square-o checked"></i>' : '<i class="fa fa-square-o"></i>' !!}
                    </span>
                    <span class="group-item-bethesda">@lang('cytology.label_hsv')</span>
                </div>

                <div class="group-items-column-5">
                    <span class="group-item-result">
                        {!! $result['result_cmv'] ? '<i class="fa fa-check-square-o checked"></i>' : '<i class="fa fa-square-o"></i>' !!}
                    </span>
                    <span class="group-item-bethesda">@lang('cytology.label_cmv')</span>
                </div>

                <div class="group-items-column-5">
                    <span class="group-item-result">
                        {!! $result['result_atrophy'] ? '<i class="fa fa-check-square-o checked"></i>' : '<i class="fa fa-square-o"></i>' !!}
                    </span>
                    <span class="group-item-bethesda">@lang('cytology.label_atrophy')</span>
                </div>

                <div class="group-items-column-5">
                    <span class="group-item-result">
                        {!! $result['result_radiation'] ? '<i class="fa fa-check-square-o checked"></i>' : '<i class="fa fa-square-o"></i>' !!}
                    </span>
                    <span class="group-item-bethesda">@lang('cytology.label_radiation')</span>
                </div>

                <div class="group-items-column-5">
                    <span class="group-item-result">
                        {!! $result['result_uterine_pessary'] ? '<i class="fa fa-check-square-o checked"></i>' : '<i class="fa fa-square-o"></i>' !!}
                    </span>
                    <span class="group-item-bethesda">@lang('cytology.label_uterine_pessary')</span>
                </div>
            </div>

            <div class="group-columns">
                <div class="group-items-column-full">
                    <span class="group-item-result">
                        {!! $result['result_other'] ? '<i class="fa fa-check-square-o checked"></i>' : '<i class="fa fa-square-o"></i>' !!}
                    </span>
                    <span class="group-item-bethesda">@lang('cytology.label_others')</span>
                    @if(!$result['result_other'])
                        <span class="group-item-result">&nbsp;&nbsp;
                            {{ $result['result_isolated_1'] }}
                        </span>
                    @endif
                </div>
            </div>
        </td>
    </tr>

    <tr class="no-border-top-bottom">
        <td class="padding-left" colspan="2">
            <strong>@lang('cytology.label_category_v')</strong>:
        </td>
    </tr>

    <tr class="no-border-top-bottom">
        <td class="" colspan="2">
            <div class="group-columns">
                <div class="group-items-column-3">
                    <span class="group-item-result">
                        {!! $result['result_atypical_of_unknown_extend'] ? '<i class="fa fa-check-square-o checked"></i>' : '<i class="fa fa-square-o"></i>' !!}
                    </span>
                    <span class="group-item-bethesda">@lang('cytology.label_atypical_of_unknown_extend')</span>
                </div>
                <div class="group-items-column-3">
                    <span class="group-item-result">
                        {!! $result['result_low_grade_sil'] ? '<i class="fa fa-check-square-o checked"></i>' : '<i class="fa fa-square-o"></i>' !!}
                    </span>
                    <span class="group-item-bethesda">@lang('cytology.label_low_grade_sil')</span>
                </div>
                <div class="group-items-column-3">
                    <span class="group-item-result">
                        {!! $result['result_high_grade_sil'] ? '<i class="fa fa-check-square-o checked"></i>' : '<i class="fa fa-square-o"></i>' !!}
                    </span>
                    <span class="group-item-bethesda">@lang('cytology.label_high_grade_sil')</span>
                </div>
            </div>

            <div class="group-columns">
                <div class="group-items-column-3">
                    <span class="group-item-result">
                        {!! $result['result_hpv_included'] ? '<i class="fa fa-check-square-o checked"></i>' : '<i class="fa fa-square-o"></i>' !!}
                    </span>
                    <span class="group-item-bethesda">@lang('cytology.label_hpv_included')</span>
                </div>

                <div class="group-items-column-3">
                    <span class="group-item-result">
                        {!! $result['result_hpv_excluded'] ? '<i class="fa fa-check-square-o checked"></i>' : '<i class="fa fa-square-o"></i>' !!}
                    </span>
                    <span class="group-item-bethesda">@lang('cytology.label_hpv_excluded')</span>
                </div>
                <div class="group-items-column-3">
                    <span class="group-item-result">
                        {!! $result['result_squamous_cell_carcinoma'] ? '<i class="fa fa-check-square-o checked"></i>' : '<i class="fa fa-square-o"></i>' !!}
                    </span>
                    <span class="group-item-bethesda">@lang('cytology.label_squamous_cell_carcinoma')</span>
                </div>
            </div>
        </td>
    </tr>

    <tr class="no-border-top-bottom">
        <td class="padding-left" colspan="2">
            <strong>@lang('cytology.label_category_g')</strong>:
        </td>
    </tr>

    <tr class="no-border-top-bottom">
        <td class="" colspan="2">
            <div class="group-columns">
                <div class="group-items-column-2">
                    <span class="group-item-result">
                        {!! $result['result_endometrial_for_female_in_meno'] ? '<i class="fa fa-check-square-o checked"></i>' : '<i class="fa fa-square-o"></i>' !!}
                    </span>
                    <span class="group-item-bethesda">@lang('cytology.label_endometrial_for_female_in_meno')</span>
                </div>

                <div class="group-items-column-2">
                    <span class="group-item-result">
                        {!! $result['result_atypical_of_unknown_extend_II'] ? '<i class="fa fa-check-square-o checked"></i>' : '<i class="fa fa-square-o"></i>' !!}
                    </span>
                    <span class="group-item-bethesda">@lang('cytology.label_atypical_of_unknown_extend_II')</span>
                </div>
            </div>

            <div class="group-columns">
                <div class="group-items-column-5">
                    <span class="group-item-result">
                        {!! $result['result_adenocarcinoma'] ? '<i class="fa fa-check-square-o checked"></i>' : '<i class="fa fa-square-o"></i>' !!}
                    </span>
                    <span class="group-item-bethesda">@lang('cytology.label_adenocarcinoma'):</span>
                </div>
            </div>

            <div class="group-columns">
                <div class="group-items-column-6">&nbsp;</div>

                <div class="group-items-column-5">
                    <span class="group-item-result">
                        {!! $result['result_endocervical'] ? '<i class="fa fa-check-square-o checked"></i>' : '<i class="fa fa-square-o"></i>' !!}
                    </span>
                    <span class="group-item-bethesda">@lang('cytology.label_endocervical')</span>
                </div>

                <div class="group-items-column-5">
                    <span class="group-item-result">
                        {!! $result['result_endometrial'] ? '<i class="fa fa-check-square-o checked"></i>' : '<i class="fa fa-square-o"></i>' !!}
                    </span>
                    <span class="group-item-bethesda">@lang('cytology.label_endometrial')</span>
                </div>

                <div class="group-items-column-5">
                    <span class="group-item-result">
                        {!! $result['result_extrauterine'] ? '<i class="fa fa-check-square-o checked"></i>' : '<i class="fa fa-square-o"></i>' !!}
                    </span>
                    <span class="group-item-bethesda">@lang('cytology.label_extrauterine')</span>
                </div>

                <div class="group-items-column-5">
                    <span class="group-item-result">
                        {!! $result['result_with_unknown_origin'] ? '<i class="fa fa-check-square-o checked"></i>' : '<i class="fa fa-square-o"></i>' !!}
                    </span>
                    <span class="group-item-bethesda">@lang('cytology.label_with_unknown_origin')</span>
                </div>
            </div>


        </td>
    </tr>

    <tr class="no-border-top-bottom">
        <td class="" colspan="2">
            <span class="group-item-result">
                {!! $result['result_other_uterine_tumors'] ? '<i class="fa fa-check-square-o checked"></i>' : '<i class="fa fa-square-o"></i>' !!}
            </span>
            <strong>@lang('cytology.label_category_d')</strong>
        </td>
    </tr>

    <tr class="no-border-top-bottom">
        <td class="padding-left" colspan="2">
            <strong>@lang('cytology.label_additional_description')</strong>:
        </td>
    </tr>
    <tr class="no-border-top-bottom">
        <td class="" colspan="2">
            <div class="group-columns">
                <div class="group-items-column-full">
                    {{ $result['result_additional_descriprion'] }}
                </div>
            </div>
        </td>
    </tr>

    <tr class="no-border-top-bottom">
        <td class="padding-left" colspan="2">
            <strong>@lang('cytology.label_recommendations')</strong>:
        </td>
    </tr>

    <tr class="no-border-top-bottom">
        <td class="" colspan="2">
            <div class="group-columns">
                <div class="group-items-column-3">
                    <span class="group-item-result">
                        {!! $result['result_coloscopy'] ? '<i class="fa fa-check-square-o checked"></i>' : '<i class="fa fa-square-o"></i>' !!}
                    </span>
                    <span class="group-item-bethesda">@lang('cytology.label_coloscopy')</span>
                </div>

                <div class="group-items-column-3">
                    <span class="group-item-result">
                        {!! $result['result_biopsy'] ? '<i class="fa fa-check-square-o checked"></i>' : '<i class="fa fa-square-o"></i>' !!}
                    </span>
                    <span class="group-item-bethesda">@lang('cytology.label_biopsy')</span>
                </div>

                <div class="group-items-column-3">
                    <span class="group-item-result">
                        {!! $result['result_cervical_abrasion'] ? '<i class="fa fa-check-square-o checked"></i>' : '<i class="fa fa-square-o"></i>' !!}
                    </span>
                    <span class="group-item-bethesda">@lang('cytology.label_cervical_abrasion')</span>
                </div>
            </div>

            <div class="group-columns">
                <div class="group-items-column-3">
                    <span class="group-item-result">
                        {!! $result['result_separated_abrasion'] ? '<i class="fa fa-check-square-o checked"></i>' : '<i class="fa fa-square-o"></i>' !!}
                    </span>
                    <span class="group-item-bethesda">@lang('cytology.label_separated_abrasion')</span>
                </div>

                <div class="group-items-column-3">
                    <span class="group-item-result">
                        {!! $result['result_test_with_local_estrogen'] ? '<i class="fa fa-check-square-o checked"></i>' : '<i class="fa fa-square-o"></i>' !!}
                    </span>
                    <span class="group-item-bethesda">@lang('cytology.label_test_with_local_estrogen')</span>
                </div>

                <div class="group-items-column-3">
                    <span class="group-item-result">
                        {!! $result['result_test_hpv'] ? '<i class="fa fa-check-square-o checked"></i>' : '<i class="fa fa-square-o"></i>' !!}
                    </span>
                    <span class="group-item-bethesda">@lang('cytology.label_test_hpv')</span>
                </div>
            </div>
        </td>
    </tr>

    <tr class="no-border-top-bottom">
        <td class="padding-left" colspan="2">
            <strong>@lang('cytology.label_next_cytologic_smear')</strong>:
        </td>
    </tr>

    <tr class="no-border-top-bottom">
        <td class="" colspan="2">
            <div class="group-columns">
                <div class="group-items-column-5">
                    <span class="group-item-result">
                        {!! $result['result_after_1_month'] ? '<i class="fa fa-check-square-o checked"></i>' : '<i class="fa fa-square-o"></i>' !!}
                    </span>
                    <span class="group-item-bethesda">@lang('cytology.label_after_1_month')</span>
                </div>

                <div class="group-items-column-5">
                    <span class="group-item-result">
                        {!! $result['result_after_3_months'] ? '<i class="fa fa-check-square-o checked"></i>' : '<i class="fa fa-square-o"></i>' !!}
                    </span>
                    <span class="group-item-bethesda">@lang('cytology.label_after_3_months')</span>
                </div>

                <div class="group-items-column-5">
                    <span class="group-item-result">
                        {!! $result['result_after_6_months'] ? '<i class="fa fa-check-square-o checked"></i>' : '<i class="fa fa-square-o"></i>' !!}
                    </span>
                    <span class="group-item-bethesda">@lang('cytology.label_after_6_months')</span>
                </div>

                <div class="group-items-column-5">
                    <span class="group-item-result">
                        {!! $result['result_after_12_months'] ? '<i class="fa fa-check-square-o checked"></i>' : '<i class="fa fa-square-o"></i>' !!}
                    </span>
                    <span class="group-item-bethesda">@lang('cytology.label_after_12_months')</span>
                </div>

                <div class="group-items-column-5">
                    <span class="group-item-bethesda">@lang('cytology.label_other_period'):</span>
                    @if($result['result_other_term'])
                       &nbsp;&nbsp;{{ $result['result_other_term'] }}
                    @endif
                </div>
            </div>
        </td>
    </tr>

</table>



