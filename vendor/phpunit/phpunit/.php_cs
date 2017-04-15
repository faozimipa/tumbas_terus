<?php
$header = <<<'EOF'
This file is part of PHPUnit.

(c) Sebastian Bergmann <sebastian@phpunit.de>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.
EOF;

return PhpCsFixer\Config::create()
    ->setRiskyAllowed(true)
    ->setRules(
        [
<<<<<<< HEAD
            'array_syntax' => ['syntax' => 'short'],
=======
            'header_comment' => ['header' => $header, 'separate' => 'none'],
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
            'binary_operator_spaces' => [
                'align_double_arrow' => true,
                'align_equals' => true
            ],
<<<<<<< HEAD
            'blank_line_after_namespace' => true,
            'blank_line_before_return' => true,
            'braces' => true,
            'cast_spaces' => true,
            'concat_space' => ['spacing' => 'one'],
            'elseif' => true,
            'encoding' => true,
            'full_opening_tag' => true,
            'function_declaration' => true,
            'header_comment' => ['header' => $header, 'separate' => 'none'],
            'indentation_type' => true,
            'line_ending' => true,
            'lowercase_constants' => true,
            'lowercase_keywords' => true,
            'method_argument_space' => true,
            'no_alias_functions' => true,
            'no_blank_lines_after_class_opening' => true,
            'no_blank_lines_after_phpdoc' => true,
            'no_closing_tag' => true,
            'no_empty_phpdoc' => true,
            'no_empty_statement' => true,
            'no_extra_consecutive_blank_lines' => true,
            'no_leading_namespace_whitespace' => true,
            'no_singleline_whitespace_before_semicolons' => true,
            'no_spaces_after_function_name' => true,
            'no_spaces_inside_parenthesis' => true,
            'no_trailing_comma_in_list_call' => true,
            'no_trailing_whitespace' => true,
            'no_unused_imports' => true,
            'no_whitespace_in_blank_line' => true,
            'phpdoc_align' => true,
=======
            'braces' => true,
            'concat_space' => ['spacing' => 'one'],
            'no_empty_statement' => true,
            'elseif' => true,
            'simplified_null_return' => true,
            'encoding' => true,
            'single_blank_line_at_eof' => true,
            'no_extra_consecutive_blank_lines' => true,
            'no_spaces_after_function_name' => true,
            'function_declaration' => true,
            'indentation_type' => true,
            'no_alias_functions' => true,
            'blank_line_after_namespace' => true,
            'line_ending' => true,
            'no_trailing_comma_in_list_call' => true,
            'lowercase_constants' => true,
            'lowercase_keywords' => true,
            'method_argument_space' => true,
            'single_import_per_statement' => true,
            'no_leading_namespace_whitespace' => true,
            'no_blank_lines_after_class_opening' => true,
            'no_blank_lines_after_phpdoc' => true,
            'no_spaces_inside_parenthesis' => true,
            'no_closing_tag' => true,
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
            'phpdoc_indent' => true,
            'phpdoc_no_access' => true,
            'phpdoc_no_empty_return' => true,
            'phpdoc_no_package' => true,
<<<<<<< HEAD
=======
            'phpdoc_align' => true,
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
            'phpdoc_scalar' => true,
            'phpdoc_separation' => true,
            'phpdoc_to_comment' => true,
            'phpdoc_trim' => true,
            'phpdoc_types' => true,
            'phpdoc_var_without_name' => true,
<<<<<<< HEAD
            'self_accessor' => true,
            'simplified_null_return' => true,
            'single_blank_line_at_eof' => true,
            'single_import_per_statement' => true,
            'single_line_after_imports' => true,
            'single_quote' => true,
            'ternary_operator_spaces' => true,
            'trim_array_spaces' => true,
            'visibility_required' => true,
=======
            'no_extra_consecutive_blank_lines' => ['use'],
            'blank_line_before_return' => true,
            'self_accessor' => true,
            'array_syntax' => ['syntax' => 'short'],
            'full_opening_tag' => true,
            'single_line_after_imports' => true,
            'single_quote' => true,
            'no_singleline_whitespace_before_semicolons' => true,
            'cast_spaces' => true,
            'ternary_operator_spaces' => true,
            'no_trailing_whitespace' => true,
            'trim_array_spaces' => true,
            'no_unused_imports' => true,
            'visibility_required' => true,
            'no_whitespace_in_blank_line' => true
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
        ]
    )
    ->setFinder(
        PhpCsFixer\Finder::create()
        ->files()
        ->in(__DIR__ . '/build')
        ->in(__DIR__ . '/src')
<<<<<<< HEAD
        ->in(__DIR__ . '/tests/Framework')
        ->in(__DIR__ . '/tests/Runner')
        ->in(__DIR__ . '/tests/Util')
=======
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
        ->name('*.php')
    );
