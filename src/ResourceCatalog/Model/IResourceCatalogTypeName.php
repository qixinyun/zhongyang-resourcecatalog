<?php
namespace ResourceCatalog\Model;

interface IResourceCatalogTypeName
{
    const TYPE_NAME = array(
        IResourceCatalog::TYPE['NULL'] => '',
        IResourceCatalog::TYPE['XBXZCF'] => '行政处罚公示信息',
        IResourceCatalog::TYPE['XBXZXK'] => '行政许可公示信息',
        IResourceCatalog::TYPE['JGJCDXZJL'] => '价格监测的行政奖励',
        IResourceCatalog::TYPE['SJJXMXX'] => '社会事业领域中央预算内和省基建项目信息',
        IResourceCatalog::TYPE['QIYEJBXX'] => '企业基本信息',
        IResourceCatalog::TYPE['GTGSHXX'] => '个体工商户信息',
        IResourceCatalog::TYPE['CMQYSBXX'] => '驰名商标、企业著名商标信息',
        IResourceCatalog::TYPE['YPLSQYXX'] => '药品零售企业信息',
        IResourceCatalog::TYPE['JGRYXX'] => '机构荣誉信息',
        IResourceCatalog::TYPE['SXQYHMD'] => '失信企业黑名单',
        IResourceCatalog::TYPE['SPYPTSJBJLGR'] => '食品药品投诉举报奖励（个人）',
        IResourceCatalog::TYPE['SPYPTSJBJLDW'] => '食品药品投诉举报奖励（单位）',
        IResourceCatalog::TYPE['HNMPCPXX'] => '山西名牌产品信息',
        IResourceCatalog::TYPE['QYYCMLXX'] => '企业异常名录信息',
        IResourceCatalog::TYPE['QYZXXX'] => '企业注销信息',
        IResourceCatalog::TYPE['QYDXXX'] => '企业吊销信息',
        IResourceCatalog::TYPE['CCJCJGXX'] => '抽查检查结果信息',
        IResourceCatalog::TYPE['FRXX'] => '法人信息',
        IResourceCatalog::TYPE['YSCRJZJJJZGRDXX'] => '因私出入境中介机构资格认定信息（境外就业、留学除外）',
        IResourceCatalog::TYPE['JDCWFXX'] => '机动车违法信息（酒后驾车违法信息）',
        IResourceCatalog::TYPE['JSZGXX'] => '教师资格信息',
        IResourceCatalog::TYPE['SJYXXS'] => '市级三好学生、市级优秀学生干部',
        IResourceCatalog::TYPE['JYJGXINXI'] => '教育机构信息',
        IResourceCatalog::TYPE['GRRYXXJYJ'] => '个人荣誉信息',
        IResourceCatalog::TYPE['JGRYXXSJYJ'] => '机构荣誉信息',
        IResourceCatalog::TYPE['ESCJDPGJGHZZS'] => '二手车鉴定评估机构核准证书',
        IResourceCatalog::TYPE['ZYJNZSXX'] => '职业技能证书信息',
        IResourceCatalog::TYPE['YLBXXX'] => '医疗保险信息',
        IResourceCatalog::TYPE['YZTQSBXXHMD'] => '严重拖欠社保信息黑名单',
        IResourceCatalog::TYPE['SYBXXX'] => '失业保险信息',
        IResourceCatalog::TYPE['SBQYXX'] => '社保企业信息',
        IResourceCatalog::TYPE['GZRYXX'] => '公职人员信息',
        IResourceCatalog::TYPE['YZTQNMGGZHMD'] => '严重拖欠农民工工资黑名单',
        IResourceCatalog::TYPE['SLYSXKZXX'] => '水路运输许可证信息',
        IResourceCatalog::TYPE['GRRYXXJTJ'] => '个人荣誉信息',
        IResourceCatalog::TYPE['QYGSZXXX'] => '企业税务注销信息',
        IResourceCatalog::TYPE['AJNSRXX'] => 'A级纳税人信息',
        IResourceCatalog::TYPE['ZDSSWFAJXX'] => '重大税收违法案件信息',
        IResourceCatalog::TYPE['QYDSXZCFXX'] => '企业地税行政处罚信息',
        IResourceCatalog::TYPE['SHZZNJXX'] => '社会组织年检信息',
        IResourceCatalog::TYPE['GRRYXXMZJ'] => '个人荣誉信息',
        IResourceCatalog::TYPE['MBFQYML'] => '民办非企业名录',
        IResourceCatalog::TYPE['SHTTDJXX'] => '社会团体登记信息',
        IResourceCatalog::TYPE['SFJDJGCYRYZGXX'] => '司法鉴定机构从业人员资格信息',
        IResourceCatalog::TYPE['SFJDJGDJXX'] => '司法鉴定机构登记信息',
        IResourceCatalog::TYPE['GZJGJBXX'] => '公证机构基本信息',
        IResourceCatalog::TYPE['GZYXX'] => '公证员信息',
        IResourceCatalog::TYPE['JCFLFWSXX'] => '基层法律服务所信息',
        IResourceCatalog::TYPE['JCFLFWGZZJBXX'] => '基层法律服务工作者基本信息',
        IResourceCatalog::TYPE['LSSWSXX'] => '律师事务所信息',
        IResourceCatalog::TYPE['LSZYZGZXX'] => '律师执业资格证信息',
        IResourceCatalog::TYPE['JGRYXXSSFJ'] => '机构荣誉信息',
        IResourceCatalog::TYPE['SJQYJSZXRDXX'] => '省级企业技术中心认定信息',
        IResourceCatalog::TYPE['ZFCGDLJGXX'] => '政府采购代理机构信息',
        IResourceCatalog::TYPE['SLGCZBXX'] => '水利工程中标信息',
        IResourceCatalog::TYPE['GJJLTQYRZXX'] => '国家级龙头企业认证信息',
        IResourceCatalog::TYPE['DTJXJGRXX'] => '对统计先进个人信息',
        IResourceCatalog::TYPE['TJDCDXML'] => '统计调查对象目录',
        IResourceCatalog::TYPE['HNSZLJDW'] => '山西省专利奖（单位）',
        IResourceCatalog::TYPE['XSPJXX'] => '刑事判决信息',
        IResourceCatalog::TYPE['SXBZXJGXX'] => '失信被执行机构信息',
        IResourceCatalog::TYPE['SXBZXRMD'] => '失信被执行人名单',
        IResourceCatalog::TYPE['XZXKQYXX'] => '行政许可企业信息',
        IResourceCatalog::TYPE['QSLHXJJTJL'] => '全市绿化先进集体奖励',
        IResourceCatalog::TYPE['SPFYSXK'] => '商品房预售许可',
        IResourceCatalog::TYPE['FDCKFQYZZXX'] => '房地产开发企业资质信息',
        IResourceCatalog::TYPE['JGRYXXSFGJ'] => '机构荣誉信息',
        IResourceCatalog::TYPE['XYTXHMD'] => '信用体系红名单',
        IResourceCatalog::TYPE['SYDWJBXX'] => '事业单位基本信息',
        IResourceCatalog::TYPE['XZQZXX'] => '行政强制信息',
        IResourceCatalog::TYPE['XZZSXX'] => '行政征收信息',
        IResourceCatalog::TYPE['XZCJXX'] => '行政裁决信息',
        IResourceCatalog::TYPE['XZQRXX'] => '行政确认信息',
        IResourceCatalog::TYPE['XZJFXX'] => '行政给付信息',
        IResourceCatalog::TYPE['JDJCXX'] => '监督检查信息',
        IResourceCatalog::TYPE['XZJLXX'] => '行政奖励信息',
        IResourceCatalog::TYPE['QTXZZFXX'] => '其他行政执法信息',
        IResourceCatalog::TYPE['HEIMDXX'] => '黑名单信息',
        IResourceCatalog::TYPE['HONGMDXX'] => '红名单信息',
        IResourceCatalog::TYPE['HYFJFLJG'] => '行业分级分类结果',
        IResourceCatalog::TYPE['QYHYSJ'] => '企业行业数据',
        IResourceCatalog::TYPE['TEST'] => '演示资源目录',
        IResourceCatalog::TYPE['DWYSZCXX'] => '单位用水注册信息',
        IResourceCatalog::TYPE['TQMYQYZK'] => '拖欠民营企业账款',
        IResourceCatalog::TYPE['ZFCGHT'] => '政府采购合同',
        IResourceCatalog::TYPE['GGZYJYHT'] => '公共资源交易合同',
        IResourceCatalog::TYPE['GQCGHT'] => '国企采购合同',
        IResourceCatalog::TYPE['GCJSHT'] => '工程建设合同',
        IResourceCatalog::TYPE['QTHT'] => '其他合同',
        IResourceCatalog::TYPE['XYSFSQ'] => '信用示范（商圈、街区）',
        IResourceCatalog::TYPE['CCJCJG'] => '抽查检查结果',
        IResourceCatalog::TYPE['QYFRGGXYZHPJJG'] => '企业法人公共信用综合评价结果',
        //@position
    );
}
