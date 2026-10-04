<?php
/**
 * Trade Sphare Pro - WooCommerce Arabic
 *
 * @package TradeSpharePro
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}


/**
 * Translate selected WooCommerce strings.
 *
 * This is intentionally limited to storefront strings.
 *
 * @param string $translation Translated string.
 * @param string $text        Original string.
 * @param string $domain      Text domain.
 * @return string
 */
function trade_sphare_pro_woocommerce_gettext(
	$translation,
	$text,
	$domain
) {

	if ( 'woocommerce' !== $domain ) {
		return $translation;
	}

	$translations = array(

		/*
		 * Product / cart.
		 */
        'Actions' => 'الإجراءات',
'Previous' => 'السابق',
'Next' => 'التالي',
'Browse products' => 'تصفح المنتجات',
'No order has been made yet.' => 'لم يتم إنشاء أي طلب بعد.',
'Order updates' => 'تحديثات الطلب',
'Payment method' => 'طريقة الدفع',
'Billing details' => 'بيانات الفوترة',
'Shipping details' => 'بيانات الشحن',
'Additional information' => 'معلومات إضافية',
'Order notes' => 'ملاحظات الطلب',
'Thank you. Your order has been received.' => 'شكرًا لك، تم استلام طلبك.',
'Your order has been received and is now being processed.' => 'تم استلام طلبك وهو الآن قيد المعالجة.',
'View' => 'عرض',
'for %s item' => 'لـ %s منتج',
'for %s items' => 'لـ %s منتجات',

		'Add to cart'       => 'أضف إلى السلة',
		'Read more'         => 'عرض المنتج',
		'Select options'    => 'اختر الخيارات',
		'View products'     => 'عرض المنتجات',
		'Buy product'       => 'شراء المنتج',

		/*
		 * Cart.
		 */
		'View cart'         => 'عرض السلة',
		'Continue shopping' => 'متابعة التسوق',
		'Return to shop'    => 'العودة إلى المتجر',
		'Update cart'       => 'تحديث السلة',
		'Apply coupon'      => 'تطبيق الكوبون',
		'Coupon code'       => 'رمز الكوبون',
		'Cart totals'       => 'إجمالي السلة',

		/*
		 * Checkout.
		 */
		'Place order'       => 'تأكيد الطلب',
		'Proceed to checkout'=> 'إتمام الطلب',

		/*
		 * Order.
		 */
		'View order'        => 'عرض الطلب',
		'Pay'               => 'الدفع',
		'Cancel'            => 'إلغاء',
		'Order again'       => 'إعادة الطلب',

		/*
		 * Account.
		 */
		'Login'             => 'تسجيل الدخول',
		'Logout'            => 'تسجيل الخروج',
		'Edit'              => 'تعديل',

		/*
		 * Empty / catalog.
		 */
		'Your cart is currently empty.'
			=> 'السلة فارغة حاليًا.',

		'No products were found matching your selection.'
			=> 'لم يتم العثور على منتجات تطابق اختيارك.',

		'No products were found.'
			=> 'لم يتم العثور على منتجات.',

		/*
		 * Shipping / common.
		 */
		'Free shipping'
			=> 'شحن مجاني',

		'Shipping'
			=> 'الشحن',

		'Subtotal'
			=> 'المجموع الفرعي',

		'Total'
			=> 'الإجمالي',

		'Product'
			=> 'المنتج',

		'Quantity'
			=> 'الكمية',

		'Price'
			=> 'السعر',

		'Order'
			=> 'الطلب',

		'Date'
			=> 'التاريخ',

		'Status'
			=> 'الحالة',
	);

	return isset( $translations[ $text ] )
		? $translations[ $text ]
		: $translation;
}

add_filter(
	'gettext_woocommerce',
	'trade_sphare_pro_woocommerce_gettext',
	20,
	3
);


/**
 * Product loop button text.
 *
 * WooCommerce exposes this filter for the loop add-to-cart label.
 *
 * @param string    $text    Button text.
 * @param WC_Product $product Product object.
 * @return string
 */
function trade_sphare_pro_product_add_to_cart_text(
	$text,
	$product
) {

	if ( ! $product instanceof WC_Product ) {
		return $text;
	}

	switch ( $product->get_type() ) {

		case 'variable':
			return __( 'اختر الخيارات', 'trade-sphare-pro' );

		case 'grouped':
			return __( 'عرض المنتجات', 'trade-sphare-pro' );

		case 'external':
			return __( 'شراء المنتج', 'trade-sphare-pro' );

		case 'simple':

			if (
				$product->is_purchasable()
				&&
				$product->is_in_stock()
			) {
				return __( 'أضف إلى السلة', 'trade-sphare-pro' );
			}

			return __( 'عرض المنتج', 'trade-sphare-pro' );
	}

	return $text;
}

add_filter(
	'woocommerce_product_add_to_cart_text',
	'trade_sphare_pro_product_add_to_cart_text',
	20,
	2
);


/**
 * Single product add-to-cart text.
 *
 * @param string    $text    Button text.
 * @param WC_Product $product Product object.
 * @return string
 */
function trade_sphare_pro_single_add_to_cart_text(
	$text,
	$product
) {

	if ( ! $product instanceof WC_Product ) {
		return $text;
	}

	switch ( $product->get_type() ) {

		case 'external':
			return __( 'شراء المنتج', 'trade-sphare-pro' );

		default:
			return __( 'أضف إلى السلة', 'trade-sphare-pro' );
	}
}

add_filter(
	'woocommerce_product_single_add_to_cart_text',
	'trade_sphare_pro_single_add_to_cart_text',
	20,
	2
);


/**
 * Product add-to-cart success message.
 *
 * @param string    $text    Success message.
 * @param WC_Product $product Product object.
 * @return string
 */
function trade_sphare_pro_product_add_to_cart_success_message(
	$text,
	$product
) {

	if ( ! $product instanceof WC_Product ) {
		return $text;
	}

	return sprintf(
		/* translators: %s: product name. */
		__( 'تمت إضافة "%s" إلى السلة.', 'trade-sphare-pro' ),
		$product->get_name()
	);
}

add_filter(
	'woocommerce_product_add_to_cart_success_message',
	'trade_sphare_pro_product_add_to_cart_success_message',
	20,
	2
);


/**
 * Checkout order button.
 *
 * @param string $text Default order button text.
 * @return string
 */
function trade_sphare_pro_order_button_text( $text ) {

	return __( 'تأكيد الطلب', 'trade-sphare-pro' );
}

add_filter(
	'woocommerce_order_button_text',
	'trade_sphare_pro_order_button_text',
	20
);


/**
 * Arabic WooCommerce order statuses.
 *
 * Keep WooCommerce internal status keys unchanged.
 *
 * @param array $statuses Order statuses.
 * @return array
 */
function trade_sphare_pro_order_statuses_ar( $statuses ) {

	$labels = array(
		'wc-pending'    => 'بانتظار الدفع',
		'wc-processing' => 'قيد المعالجة',
		'wc-on-hold'    => 'قيد المراجعة',
		'wc-completed'  => 'مكتمل',
		'wc-cancelled'  => 'ملغى',
		'wc-refunded'   => 'مسترد',
		'wc-failed'     => 'فشل',
	);

	foreach ( $labels as $status_key => $label ) {

		if ( isset( $statuses[ $status_key ] ) ) {
			$statuses[ $status_key ] = __(
				$label,
				'trade-sphare-pro'
			);
		}
	}

	return $statuses;
}

add_filter(
	'wc_order_statuses',
	'trade_sphare_pro_order_statuses_ar',
	20
);


/**
 * Empty cart message.
 *
 * @param string $message Default message.
 * @return string
 */
function trade_sphare_pro_empty_cart_message( $message ) {

	return __(
		'السلة فارغة حاليًا.',
		'trade-sphare-pro'
	);
}

add_filter(
	'wc_empty_cart_message',
	'trade_sphare_pro_empty_cart_message',
	20
);


/**
 * Return to shop text.
 *
 * @param string $text Default text.
 * @return string
 */
function trade_sphare_pro_return_to_shop_text( $text ) {

	return __(
		'العودة إلى المتجر',
		'trade-sphare-pro'
	);
}

add_filter(
	'woocommerce_return_to_shop_text',
	'trade_sphare_pro_return_to_shop_text',
	20
);

/**
 * Arabic My Account order columns.
 *
 * @param array $columns Order columns.
 * @return array
 */
function trade_sphare_pro_account_orders_columns( $columns ) {

	$columns = array(
		'order-number'  => __( 'الطلب', 'trade-sphare-pro' ),
		'order-date'    => __( 'التاريخ', 'trade-sphare-pro' ),
		'order-status'  => __( 'الحالة', 'trade-sphare-pro' ),
		'order-total'   => __( 'الإجمالي', 'trade-sphare-pro' ),
		'order-actions' => __( 'الإجراءات', 'trade-sphare-pro' ),
	);

	return $columns;
}

add_filter(
	'woocommerce_account_orders_columns',
	'trade_sphare_pro_account_orders_columns',
	20
);

/**
 * Arabic checkout field labels and placeholders.
 *
 * Applies to the classic shortcode checkout.
 *
 * @param array $fields Checkout fields.
 * @return array
 */
function trade_sphare_pro_checkout_fields_ar( $fields ) {

	$billing = array(
		'billing_first_name' => array(
			'label'       => 'الاسم الأول',
			'placeholder' => 'الاسم الأول',
		),
		'billing_last_name' => array(
			'label'       => 'اسم العائلة',
			'placeholder' => 'اسم العائلة',
		),
		'billing_company' => array(
			'label'       => 'اسم الشركة',
			'placeholder' => 'اسم الشركة',
		),
		'billing_country' => array(
			'label' => 'الدولة / المنطقة',
		),
		'billing_address_1' => array(
			'label'       => 'العنوان',
			'placeholder' => 'اسم الشارع ورقم المبنى',
		),
		'billing_address_2' => array(
			'label'       => 'تفاصيل إضافية',
			'placeholder' => 'الشقة، الطابق، ملاحظات العنوان',
		),
		'billing_city' => array(
			'label'       => 'المدينة',
			'placeholder' => 'المدينة',
		),
		'billing_state' => array(
			'label' => 'المحافظة',
		),
		'billing_postcode' => array(
			'label'       => 'الرمز البريدي',
			'placeholder' => 'الرمز البريدي',
		),
		'billing_phone' => array(
			'label'       => 'رقم الهاتف',
			'placeholder' => '09XXXXXXXX',
		),
		'billing_email' => array(
			'label'       => 'البريد الإلكتروني',
			'placeholder' => 'example@email.com',
		),
	);

	foreach ( $billing as $field_id => $values ) {

		if ( ! isset( $fields['billing'][ $field_id ] ) ) {
			continue;
		}

		foreach ( $values as $key => $value ) {
			$fields['billing'][ $field_id ][ $key ] = $value;
		}
	}


	$shipping = array(
		'shipping_first_name' => array(
			'label'       => 'الاسم الأول',
			'placeholder' => 'الاسم الأول',
		),
		'shipping_last_name' => array(
			'label'       => 'اسم العائلة',
			'placeholder' => 'اسم العائلة',
		),
		'shipping_company' => array(
			'label'       => 'اسم الشركة',
			'placeholder' => 'اسم الشركة',
		),
		'shipping_country' => array(
			'label' => 'الدولة / المنطقة',
		),
		'shipping_address_1' => array(
			'label'       => 'العنوان',
			'placeholder' => 'اسم الشارع ورقم المبنى',
		),
		'shipping_address_2' => array(
			'label'       => 'تفاصيل إضافية',
			'placeholder' => 'الشقة، الطابق، ملاحظات العنوان',
		),
		'shipping_city' => array(
			'label'       => 'المدينة',
			'placeholder' => 'المدينة',
		),
		'shipping_state' => array(
			'label' => 'المحافظة',
		),
		'shipping_postcode' => array(
			'label'       => 'الرمز البريدي',
			'placeholder' => 'الرمز البريدي',
		),
	);

	foreach ( $shipping as $field_id => $values ) {

		if ( ! isset( $fields['shipping'][ $field_id ] ) ) {
			continue;
		}

		foreach ( $values as $key => $value ) {
			$fields['shipping'][ $field_id ][ $key ] = $value;
		}
	}


	if ( isset( $fields['order']['order_comments'] ) ) {

		$fields['order']['order_comments']['label'] = 'ملاحظات الطلب';

		$fields['order']['order_comments']['placeholder'] =
			'ملاحظات خاصة بالطلب أو التوصيل (اختياري)';
	}


	return $fields;
}

add_filter(
	'woocommerce_checkout_fields',
	'trade_sphare_pro_checkout_fields_ar',
	20
);


/**
 * Arabic order-details status sentence.
 *
 * @param string   $text  Default status sentence.
 * @param WC_Order $order Order object.
 * @return string
 */
function trade_sphare_pro_order_details_status_ar(
	$text,
	$order
) {

	if ( ! $order instanceof WC_Order ) {
		return $text;
	}

	$status = wc_get_order_status_name(
		$order->get_status()
	);

	$date = $order->get_date_created()
		? wc_format_datetime(
			$order->get_date_created()
		)
		: '';

	return sprintf(
		'الطلب #%1$s تم إنشاؤه بتاريخ %2$s وحالته الحالية: %3$s.',
		esc_html( $order->get_order_number() ),
		esc_html( $date ),
		esc_html( $status )
	);
}

add_filter(
	'woocommerce_order_details_status',
	'trade_sphare_pro_order_details_status_ar',
	20,
	2
);