<?php
/**
 * WordPress���������ļ���
 *
 * ����ļ�����װ���������Զ�����wp-config.php�����ļ���
 * �����Բ�ʹ����վ������Ҫ�ֶ���������ļ���
 * ��������Ϊ��wp-config.php����Ȼ�����������Ϣ��
 *
 * ���ļ�������������ѡ�
 *
 * * MySQL����
 * * ��Կ
 * * ���ݿ����ǰ׺
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/zh-cn:%E7%BC%96%E8%BE%91_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL ���� - ������Ϣ����������ʹ�õ����� ** //
/** WordPress���ݿ������ */
define('DB_NAME', 'myblog');

/** MySQL���ݿ��û��� */
define('DB_USER', 'root');

/** MySQL���ݿ����� */
define('DB_PASSWORD', '1qaz2wsx');

/** MySQL���� */
define('DB_HOST', 'localhost');

/** �������ݱ�ʱĬ�ϵ����ֱ��� */
define('DB_CHARSET', 'utf8mb4');

/** ���ݿ��������͡��粻ȷ��������� */
define('DB_COLLATE', '');

/**#@+
 * �����֤��Կ���Ρ�
 *
 * �޸�Ϊ�����һ�޶����ִ���
 * ����ֱ�ӷ���{@link https://api.wordpress.org/secret-key/1.1/salt/
 * WordPress.org��Կ���ɷ���}
 * �κ��޸Ķ��ᵼ������cookiesʧЧ�������û����������µ�¼��
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '^SCO<1u|Xy!R`wx:NT*^|BcN41-=Gwg.,bJYQEE;{siKfWRhHmosx)1%*T |jc}4');
define('SECURE_AUTH_KEY',  '+2wa0#p{K)RnTO_@M7OAFKsM8vh60|:hTY,w>B!d=QW%)niP}AA2C:WPhe!l&>o+');
define('LOGGED_IN_KEY',    'H*=%{60HR$oC,SIWm7fL$u.aDK]B:=+}dTPER A2q6@fY>R8;Q9u#}v_b3/Esrbw');
define('NONCE_KEY',        'lkuhOjWU^3e1)n5@m{d]fR^(,x?@Yf#6mXV|{+xohc)$|YrO:L=;&n7:QYI`h^A.');
define('AUTH_SALT',        '9p0)n(i&: C`}CafnaU->.f%~$TPPM9H=XfA/)M<C:Zgii[R6Y4H,-`!>Txo=>-v');
define('SECURE_AUTH_SALT', 'Px4;RSmW[5NG<$4$ZO[Rpj3w9}#Sk40Gn=h=YuC>I7S^g;*Z4U_>3#MUUSwEGwbx');
define('LOGGED_IN_SALT',   'T/FAyO =:_V1=bLgc[!=i&Xn8Lggv(.by[ql-8utTOhB8+D{K)>ni;_Ac$4W6JB;');
define('NONCE_SALT',       '8M7D.|06++zV<db.W({wcE@0`_U;2LhosjlBgT6_![EE}co;3vQe}3pe4:<YRY+~');

/**#@-*/

/**
 * WordPress���ݱ�ǰ׺��
 *
 * ���������ͬһ���ݿ��ڰ�װ���WordPress��������Ϊÿ��WordPress����
 * ��ͬ�����ݱ�ǰ׺��ǰ׺��ֻ��Ϊ���֡���ĸ���»��ߡ�
 */
$table_prefix  = 'wp_';

/**
 * ������ר�ã�WordPress����ģʽ��
 *
 * �����ֵ��Ϊtrue��WordPress����ʾ�������ڿ�������ʾ��
 * ǿ�ҽ������������ڿ�������������WP_DEBUG��
 *
 * Ҫ��ȡ���������ڵ��Ե���Ϣ�������Codex��
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/**
 * zh_CN���ػ����ã�����ICP��������ʾ
 *
 * �������á��������޸ġ�
 * ������ã����Ƴ���ע�͵����С�
 */
define('WP_ZH_CN_ICP_NUM', true);

/* ���ˣ��벻Ҫ�ټ����༭���뱣�汾�ļ���ʹ����죡 */

/** WordPressĿ¼�ľ���·���� */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** ����WordPress�����Ͱ����ļ��� */
require_once(ABSPATH . 'wp-settings.php');
