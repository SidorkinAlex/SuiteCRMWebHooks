<?php
/**
 *
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM is an extension to SugarCRM Community Edition developed by SalesAgility Ltd.
 * Copyright (C) 2011 - 2018 SalesAgility Ltd.
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE. See the GNU Affero General Public License for more
 * details.
 *
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 *
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo and "Supercharged by SuiteCRM" logo. If the display of the logos is not
 * reasonably feasible for technical reasons, the Appropriate Legal Notices must
 * display the words "Powered by SugarCRM" and "Supercharged by SuiteCRM".
 */

$module_name = 'WEBH_HOOKS_REQUEST';
$viewdefs[$module_name]['DetailView'] = array(
    'templateMeta' => array(
        'form' => array(
            'buttons' => array(
                'EDIT',
                'DUPLICATE',
                'DELETE',
                'FIND_DUPLICATES',
            )
        ),
        'maxColumns' => '2',
        'widths' => array(
            array('label' => '10', 'field' => '30'),
            array('label' => '10', 'field' => '30')
        ),
    ),

    'panels' =>
        array(
            'default' =>
                array(
                    array(
                        'name',
                        'status',
                    ),
                    array(
                        array(
                            'name' => 'date_entered',
                            'customCode' => '{$fields.date_entered.value} {$APP.LBL_BY} {$fields.created_by_name.value}',
                            'label' => 'LBL_DATE_ENTERED',
                        ),
                        array(
                            'name' => 'date_modified',
                            'customCode' => '{$fields.date_modified.value} {$APP.LBL_BY} {$fields.modified_by_name.value}',
                            'label' => 'LBL_DATE_MODIFIED',
                        ),
                    ),

                    array(
                        'description',
                        'error_text',
                    ),
                    array(
                        'data',
                    ),
                    array(
                        'url',
                    ),
                    array(
                        'key01',
                        'value01',
                    ),
                    array(
                        'key02',
                        'value02',
                    ),
                    array(
                        'key03',
                        'value03',
                    ),
                    array(
                        'key04',
                        'value04',
                    ),
                    array(
                        'key05',
                        'value05',
                    ),
                    array(
                        'key06',
                        'value06',
                    ),
                    array(
                        'key07',
                        'value07',
                    ),
                    array(
                        'key08',
                        'value08',
                    ),
                    array(
                        'key09',
                        'value09',
                    ),
                    array(
                        'key10',
                        'value10',
                    ),
                    array(
                        'key11',
                        'value11',
                    ),
                    array(
                        'key12',
                        'value12',
                    ),
                    array(
                        'key13',
                        'value13',
                    ),
                    array(
                        'key14',
                        'value14',
                    ),
                    array(
                        'key15',
                        'value15',
                    ),
                    array(
                        'key16',
                        'value16',
                    ),
                    array(
                        'key17',
                        'value17',
                    ),
                    array(
                        'key18',
                        'value18',
                    ),
                    array(
                        'key19',
                        'value19',
                    ),
                    array(
                        'key20',
                        'value20',
                    ),
                    array(
                        'key21',
                        'value21',
                    ),
                    array(
                        'key22',
                        'value22',
                    ),
                    array(
                        'key23',
                        'value23',
                    ),
                    array(
                        'key24',
                        'value24',
                    ),
                    array(
                        'key25',
                        'value25',
                    ),
                    array(
                        'key26',
                        'value26',
                    ),
                    array(
                        'key27',
                        'value27',
                    ),
                    array(
                        'key28',
                        'value28',
                    ),
                    array(
                        'key29',
                        'value29',
                    ),
                    array(
                        'key30',
                        'value30',
                    ),
                    array(
                        'key31',
                        'value31',
                    ),
                    array(
                        'key32',
                        'value32',
                    ),
                    array(
                        'key33',
                        'value33',
                    ),
                    array(
                        'key34',
                        'value34',
                    ),
                    array(
                        'key35',
                        'value35',
                    ),
                    array(
                        'key36',
                        'value36',
                    ),
                    array(
                        'key37',
                        'value37',
                    ),
                    array(
                        'key38',
                        'value38',
                    ),
                    array(
                        'key39',
                        'value39',
                    ),
                    array(
                        'key40',
                        'value40',
                    ),
                    array(
                        'key41',
                        'value41',
                    ),
                    array(
                        'key42',
                        'value42',
                    ),
                    array(
                        'key43',
                        'value43',
                    ),
                    array(
                        'key44',
                        'value44',
                    ),
                    array(
                        'key45',
                        'value45',
                    ),
                    array(
                        'key46',
                        'value46',
                    ),
                    array(
                        'key47',
                        'value47',
                    ),
                    array(
                        'key48',
                        'value48',
                    ),
                    array(
                        'key49',
                        'value49',
                    ),
                    array(
                        'key50',
                        'value50',
                    ),
                    array(
                        'key51',
                        'value51',
                    ),
                    array(
                        'key52',
                        'value52',
                    ),
                    array(
                        'key53',
                        'value53',
                    ),
                    array(
                        'key54',
                        'value54',
                    ),
                    array(
                        'key55',
                        'value55',
                    ),
                    array(
                        'key56',
                        'value56',
                    ),
                    array(
                        'key57',
                        'value57',
                    ),
                    array(
                        'key58',
                        'value58',
                    ),
                    array(
                        'key59',
                        'value59',
                    ),
                    array(
                        'key60',
                        'value60',
                    ),
                    array(
                        'key61',
                        'value61',
                    ),
                    array(
                        'key62',
                        'value62',
                    ),
                    array(
                        'key63',
                        'value63',
                    ),
                    array(
                        'key64',
                        'value64',
                    ),
                    array(
                        'key65',
                        'value65',
                    ),
                    array(
                        'key66',
                        'value66',
                    ),
                    array(
                        'key67',
                        'value67',
                    ),
                    array(
                        'key68',
                        'value68',
                    ),
                    array(
                        'key69',
                        'value69',
                    ),
                    array(
                        'key70',
                        'value70',
                    ),
                    array(
                        'key71',
                        'value71',
                    ),
                    array(
                        'key72',
                        'value72',
                    ),
                    array(
                        'key73',
                        'value73',
                    ),
                    array(
                        'key74',
                        'value74',
                    ),
                    array(
                        'key75',
                        'value75',
                    ),
                    array(
                        'key76',
                        'value76',
                    ),
                    array(
                        'key77',
                        'value77',
                    ),
                    array(
                        'key78',
                        'value78',
                    ),
                    array(
                        'key79',
                        'value79',
                    ),
                    array(
                        'key80',
                        'value80',
                    ),
                    array(
                        'key81',
                        'value81',
                    ),
                    array(
                        'key82',
                        'value82',
                    ),
                    array(
                        'key83',
                        'value83',
                    ),
                    array(
                        'key84',
                        'value84',
                    ),
                    array(
                        'key85',
                        'value85',
                    ),
                    array(
                        'key86',
                        'value86',
                    ),
                    array(
                        'key87',
                        'value87',
                    ),
                    array(
                        'key88',
                        'value88',
                    ),
                    array(
                        'key89',
                        'value89',
                    ),
                    array(
                        'key90',
                        'value90',
                    ),
                    array(
                        'key91',
                        'value91',
                    ),
                    array(
                        'key92',
                        'value92',
                    ),
                    array(
                        'key93',
                        'value93',
                    ),
                    array(
                        'key94',
                        'value94',
                    ),
                    array(
                        'key95',
                        'value95',
                    ),
                    array(
                        'key96',
                        'value96',
                    ),
                    array(
                        'key97',
                        'value97',
                    ),
                    array(
                        'key98',
                        'value98',
                    ),
                    array(
                        'key99',
                        'value99',
                    ),
                    array(
                        'key100',
                        'value100',
                    ),
                )
        )
);
