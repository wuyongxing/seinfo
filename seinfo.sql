-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2016-01-12 06:12:14
-- 服务器版本： 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `seinfo`
--

-- --------------------------------------------------------

--
-- 表的结构 `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `aid` bigint(20) NOT NULL,
  `username` varchar(64) NOT NULL,
  `password` varchar(64) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `admin`
--

INSERT INTO `admin` (`aid`, `username`, `password`) VALUES
(1, 'admin', '123456');

-- --------------------------------------------------------

--
-- 表的结构 `file`
--

CREATE TABLE IF NOT EXISTS `file` (
  `fid` bigint(20) NOT NULL,
  `filename` varchar(64) NOT NULL,
  `pid` bigint(20) NOT NULL,
  `time` bigint(20) NOT NULL,
  `name` varchar(64) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `file`
--

INSERT INTO `file` (`fid`, `filename`, `pid`, `time`, `name`) VALUES
(3, '美丽哈工大', 2, 1436325427, '559c96330705f.jpg'),
(4, 'STL简单应用', 1, 1436409178, '559ddd5a336aa.ppt'),
(5, '数位DP入门', 1, 1436409281, '559dddc1b6e9a.pptx'),
(6, '网络流dinic', 3, 1436410807, '559de3b706889.ppt'),
(7, '树状数组', 3, 1436412207, '559de92fee2a4.ppt'),
(8, '并查集', 2, 1436413691, '559deefbca1b0.pdf');

-- --------------------------------------------------------

--
-- 表的结构 `homework`
--

CREATE TABLE IF NOT EXISTS `homework` (
  `hid` bigint(20) NOT NULL,
  `pid` bigint(20) NOT NULL,
  `title` varchar(64) NOT NULL,
  `content` text NOT NULL,
  `time` bigint(20) NOT NULL,
  `classify` int(11) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `homework`
--

INSERT INTO `homework` (`hid`, `pid`, `title`, `content`, `time`, `classify`) VALUES
(3, 2, '约放风筝', '本人软件学院大二的学生，这周末想约一个妹子一起去太阳岛放\r\n风筝，有萌妹子要来的话请联系183********，我的QQ是350******', 1436341114, 2),
(2, 2, 'A. Case of the Zeros and Ones', '#include <iostream>\r\n#include <cstring>\r\n#include <cstdio>\r\n#include <algorithm> \r\nusing namespace std;\r\nchar s[200010];\r\nint n;\r\nint main()\r\n{\r\n    int n;\r\n    scanf(\\"%d\\",&n);\r\n    scanf(\\"%s\\",s);\r\n    int ans1 = 0;\r\n    int ans0 = 0; \r\n    for(int i = 0; i < n; i++)\r\n        if(s[i] == \\''1\\'') ans1++;\r\n        else if(s[i] ==\\''0\\'') ans0++;\r\n    printf(\\"%d\\\\n\\",abs(ans1-ans0));\r\n    return 0;\r\n}\r\n', 1436407239, 1),
(4, 1, 'B. Case of Fake Numbers', '#include <iostream>\r\n#include <cstring>\r\n#include <string>\r\n#include <algorithm>\r\n#include <cstdio>\r\nusing namespace std;\r\nint a[1010];\r\nint main()\r\n{\r\n    int n;\r\n    scanf(\\"%d\\",&n);\r\n    for(int i = 0;i < n; i++)\r\n        scanf(\\"%d\\",&a[i]);\r\n    while(a[0])\r\n    {\r\n        for(int i = 0; i < n; i++)\r\n        {\r\n            if(i%2) a[i] = (a[i] - 1 + n ) % n;\r\n            else a[i] = (a[i] + 1) % n;\r\n        }\r\n    }\r\n    bool flag = true;\r\n    for(int i = 0; i < n; i++)\r\n        if(a[i] != i)\r\n        {\r\n            flag = false;\r\n            break;\r\n        }\r\n    if(flag) printf(\\"Yes\\\\n\\");\r\n    else printf(\\"No\\\\n\\");\r\n    return 0;\r\n}\r\n', 1436408643, 1),
(5, 1, 'A. GukiZ and Contest', '#include <iostream>\r\n#include <cstring>\r\n#include <cstdio>\r\n#include <algorithm>\r\nusing namespace std;\r\nstruct point\r\n{\r\n    int index,rating,po;\r\n}a[2100];\r\nint n;\r\nbool cmp(point a,point b)\r\n{\r\n    return a.rating > b.rating;\r\n}\r\nbool cmp1(point a,point b)\r\n{\r\n    return a.index < b.index;\r\n}\r\nint main()\r\n{\r\n    scanf(\\"%d\\",&n);\r\n    memset(a,0,sizeof(a));\r\n    for(int i = 1; i <= n; i++)\r\n        scanf(\\"%d\\",&a[i].rating),a[i].index = i;\r\n    sort(a+1,a+1+n,cmp);\r\n    int k = a[1].rating;\r\n    int num = 1;\r\n    a[1].po = num;\r\n    for(int i = 2; i <= n; i++)\r\n    {\r\n        if(a[i].rating == k)\r\n            a[i].po = num;\r\n        else\r\n        {\r\n            k = a[i].rating;\r\n            a[i].po = i;\r\n            num = i;\r\n        }\r\n    }\r\n    sort(a+1,a+1+n,cmp1);\r\n    for(int i = 1; i <= n; i++)\r\n        printf(\\"%d \\",a[i].po);\r\n    return 0;\r\n}\r\n', 1436408792, 1),
(6, 1, '寻饭卡启示', '本人***，在昨天下午4点左右遗失了饭卡，卡号是1133******，有同学见捡到必有重谢。', 1436409467, 2),
(7, 1, '约晨练', '本人很懒，一直起不来床，需要一个人来督促我，同时我也可以督促她，互相督促。希望约一个人一起早起晨练。我的手机号码是*******；', 1436409534, 2),
(8, 3, 'E. Vanya and Brackets', '#include <iostream>\r\n#include <cstring>\r\n#include <cstdio>\r\n#include <cmath>\r\n#include <algorithm>\r\n#include <vector>\r\n#include <stack>\r\nusing namespace std;\r\nint n;\r\nstring str;\r\nvector<int> index;\r\nstack<char> sc;\r\nstack<long long> sn;\r\nvoid cal1()\r\n{\r\n    char t = sc.top();\r\n    sc.pop();\r\n    long long a = sn.top();\r\n    sn.pop();\r\n    long long b = sn.top();\r\n    sn.pop();\r\n    long long tmp = (t == \\''*\\'') ? a * b : a + b;\r\n    sn.push(tmp);\r\n}\r\nlong long cal(string s)\r\n{\r\n    for(int i = 0; i < (int)s.length(); i++)\r\n    {\r\n        char c = s[i];\r\n        if(isdigit(c)) sn.push(c-\\''0\\'');\r\n        else if(c == \\''(\\'') sc.push(c);\r\n        else if(c == \\'')\\'')\r\n        {\r\n            while(sc.top()!=\\''(\\'')\r\n                cal1();\r\n            sc.pop();\r\n        }\r\n        else if(c == \\''+\\'')\r\n        {\r\n            while(!sc.empty() && sc.top() == \\''*\\'')\r\n                cal1();\r\n            sc.push(c);\r\n        }\r\n        else sc.push(c);\r\n    }\r\n    while(!sc.empty()) cal1();\r\n    return sn.top();\r\n}\r\nint main()\r\n{\r\n    cin>>str;\r\n    n = str.length();\r\n    index.clear();\r\n    index.push_back(-1);\r\n    for(int i = 0; i < n; i++)\r\n        if(str[i] == \\''*\\'') index.push_back(i);\r\n    index.push_back(n);\r\n    long long ans = 0;\r\n    for(int i = 0; i < (int)index.size() - 1; i++)\r\n    {\r\n        for(int j = i + 1; j < (int)index.size(); j++)\r\n        {\r\n            string s = str;\r\n            s.insert(index[i]+1,1,\\''(\\'');\r\n            s.insert(index[j]+1,1,\\'')\\'');\r\n            ans = max(ans,cal(s));\r\n        }\r\n    }\r\n    printf(\\"%I64d\\\\n\\",ans);\r\n    return 0;\r\n}\r\n', 1436410714, 1),
(9, 3, 'D. Case of Fugitive', '#include <iostream>\r\n#include <cstring>\r\n#include <cstdio>\r\n#include <set>\r\n#include <algorithm>\r\nusing namespace std;\r\nstruct line\r\n{\r\n    long long l,r;\r\n    int index;\r\n}b[200010];\r\nstruct point\r\n{\r\n    long long x;\r\n    int index;\r\n    bool operator < (const point &a)const{\r\n        return x < a.x;\r\n    }\r\n}a[200010];\r\nbool cmp(line a,line b)\r\n{\r\n    if(a.l == b.l) return a.r < b.r;\r\n    return a.l < b.l;\r\n}\r\nint n,m;\r\nint ans[200010];\r\nint main()\r\n{\r\n    scanf(\\"%d%d\\",&n,&m);\r\n    for(int i = 0; i < n; i++)\r\n        scanf(\\"%I64d%I64d\\",&b[i].l,&b[i].r);\r\n    set<point> s;\r\n    s.clear();\r\n    for(int i = 0; i < m; i++)\r\n    {\r\n        scanf(\\"%I64d\\",&a[i].x);\r\n        a[i].index = i + 1;\r\n        s.insert(a[i]);\r\n    }\r\n    for(int i = 1; i < n; i++)\r\n    {\r\n        long long tmpl = b[i].l - b[i-1].r;\r\n        long long tmpr = b[i].r - b[i-1].l;\r\n        b[i-1].l = tmpl;\r\n        b[i-1].r = tmpr;\r\n        b[i-1].index = i-1;\r\n    }\r\n    sort(b,b+n-1,cmp);\r\n    //for(int i = 0; i < n-1; i++)\r\n        //printf(\\"%I64d %I64d\\\\n\\",b[i].l,b[i].r);\r\n    int count1 = 0;\r\n    for(int i = 0; i < n-1; i++)\r\n    {\r\n        long long l = b[i].l;\r\n        long long r = b[i].r;\r\n        point ss;\r\n        ss.x = l;\r\n        ss.index = 0x3f3f3f3f;\r\n        set<point>::iterator k = s.lower_bound(ss);\r\n        printf(\\"%I64d\\\\n\\",k->x);\r\n        if(k != s.end())\r\n        {\r\n            k++;\r\n            if(k->x > r) break;\r\n            count1++;\r\n            ans[b[i].index] = k->index;\r\n            s.erase(k);\r\n        }\r\n        else break;\r\n    }\r\n    if(count1 != n - 1)\r\n        printf(\\"No\\\\n\\");\r\n    else\r\n    {\r\n        printf(\\"Yes\\\\n\\");\r\n        for(int i = 0; i < n - 1; i++)\r\n        {\r\n            printf(\\"%d \\",ans[i]);\r\n        }\r\n        printf(\\"\\\\n\\");\r\n    }\r\n    return 0;\r\n}\r\n', 1436410770, 1),
(10, 3, '表白贴', '曾雷弋枭，我喜欢你很久了。我是软件学院的***，我知道你喜欢胖的，于是我这个学期拼命的吃。终于达到了你的要求。跟我在一起吧。', 1436411666, 2),
(11, 3, '安利贴', '任选课选那个***老师的课，不点名，特别好过。信不信由你！', 1436412172, 2),
(12, 2, 'C. Kyoya and Colored Balls', '#include <iostream>\r\n#include <cstring>\r\n#include <algorithm>\r\n#include <cstdio>\r\nusing namespace std;\r\n#define mod 1000000007\r\nlong long c[1010][1010],a[1010];\r\nvoid init()\r\n{\r\n    for(int i=0;i<=1000;i++)c[i][0]=1;\r\n    for(int i=1;i<=1000;i++)\r\n    {\r\n          for(int j=1;j<=1000;j++)\r\n          {\r\n               c[i][j]=(c[i-1][j-1]+c[i-1][j])%mod;\r\n          }\r\n     }\r\n}\r\nint main()\r\n{\r\n    init();\r\n    int n;\r\n    scanf(\\"%d\\",&n);\r\n    for(int i = 1;i <= n; i++)\r\n    {\r\n        scanf(\\"%I64d\\",&a[i]);\r\n        a[i]--;\r\n    }\r\n    long long ans = 1;\r\n    long long anss = 0;\r\n    for(int i = 1; i <= n; i++)\r\n    {\r\n        anss += a[i];\r\n        ans = (ans * c[anss][a[i]])%mod;\r\n        anss++;\r\n    }\r\n    printf(\\"%I64d\\\\n\\",ans);\r\n    return 0;\r\n}\r\n', 1436413719, 1),
(13, 2, '征婚帖', '我是软件学院的曾雷弋枭，比较寂寞。想找个女朋友。有意者联系********', 1436414086, 2);

-- --------------------------------------------------------

--
-- 表的结构 `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `nid` bigint(20) NOT NULL,
  `title` varchar(64) NOT NULL,
  `content` text NOT NULL,
  `time` bigint(20) NOT NULL,
  `pid` bigint(20) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `news`
--

INSERT INTO `news` (`nid`, `title`, `content`, `time`, `pid`) VALUES
(6, '研究生人文素质讲座第109期—与阿里巴巴副总裁一起畅想', '讲座题目：从电商搜索到智能大数据平台之路\r\n \r\n主讲人：谷雪梅 副总裁\r\n \r\n主讲人简介：\r\n \r\n      谷雪梅女士，阿里巴巴副总裁，搜索事业部负责人；本科毕业于清华大学，硕士毕业于卡内基梅隆大学。在Inktomi Inc（后被雅虎收购）工作4年，做企业版搜索引擎的研发。之后的10年在谷歌，从工程师逐渐过渡到管理，最后三年任谷歌中国研究院副院长，负责谷歌北京研究院的研发。她在云计算平台，商品搜索和知识图谱方面有多年的开发和管理经验。\r\n  \r\n讲座内容：\r\n \r\n       十六年，是什么推动了阿里从青涩到全球互联网的巨头？\r\n \r\n       在阿里石破天惊的上市背后有着怎样的宏大商业版图？\r\n \r\n       在从IT到DT的时代，阿里将怎样发力大数据？\r\n \r\n       阿里的搜索？怎么悄无声息就做到了全球最大的商品搜索？\r\n \r\n……让我们相约哈工大，一起畅想，不见不散！\r\n \r\n讲座须知：\r\n \r\n       时间：5月21日晚18：30~20：00\r\n \r\n       地点：一区活动中心214\r\n \r\n       欢迎广大师生踊跃参加！', 1436317549, 1),
(11, '软件学院参加中国国际软件人才•项目•投资交流大会', '2015年4月18日-19日，第十三届中国国际软件人才交流大会在广东深圳会展中心举行。软件学院就人才培养、国际合作、校企合作、学生就业等方面进行展板展示，得到与会专家同行的关注与好评。计算机学院党委书记、软件学院副院长赵铁军，副院长邓胜春和学工办主任尹胜君参加本次大会，出席了大会开幕式、多个主题论坛，参观了腾讯公司，并与多个示范性软件学院的代表、科研及人才机构、IT企业等进行深入交流。\r\n\r\n中国国际软件人才交流大会是国务院批准，由国家外专局、深圳市人民政府主办的专业人才开放的规模最大、规格最高的国家级、国际性的人才与智力交流盛会，是一个集人才、智力、技术、项目和管理为一体的综合性大会。从2001年至2015年已成功召开13届，固定于每年4月举办。本次大会有41所国内知名大学软件学院及韩国大学等国外知名大学参展，超过70个国家和地区的各类外国专家组织、科研机构、人才机构，1000名海外高层次人才和5000多个创新创业项目参会。', 1436409934, 3),
(12, '软件学子在微软编程之美2015挑战赛总决赛中取得冠军', '经过24小时的封闭式竞赛，在2015年5月26日结束的微软编程之美2015挑战赛总决赛中，哈工大软件学院学生唐飞虎同学摘下一等奖桂冠，来自清华大学的陈晓奇同学和上海交通大学的郭晓旭同学获得二等奖，香港中文大学的李俊言、复旦大学的程文章、大连理工大学的陈梁坚取得三等奖。该项顶级编程大赛，最终50名国内外编程高手在微软（亚洲）互联网工程院苏州分院进行最后的角逐。\r\n \r\n编程之美挑战赛由微软主办、电气电子工程师学会（IEEE）协办，该赛事面向在校学生开展的大型编程比赛，致力于为年轻开发者提供国际一流水平的开发与交流机会，鼓励他们开发潜能、通过创新方法应对现实问题。本届大赛分为资格赛、初赛、复赛和决赛四轮，历时近两个月。此赛事是面向学生开展的顶级编程比赛，历时近两个月，自2012年以来已成功举办三届。今年大赛总决赛主题为“人工智能”，参与选手人数创历史新高，在预赛阶段就吸引了清华、北大在内的超过150所高校的22653名大学生参与，最终前50名选手杀入苏州总决赛。还吸引了来自港台地区，以及日本、印度的参赛选手参与。由微软研究院开发的Code Hunt以及北京大学研发的POJ两大在线编程与评测系统是本届大赛的“双评委”。多元化的测试与评价体系让来自不同背景、拥有不同技术偏好与擅长领域的参赛者可以得到合理的评审，同时提升参赛者挑战多重标准的综合实力。\r\n \r\n软件学院以国际化、工业化为培养理念，致力于培养软件产业的领军人才，通过组建科技创新氛围浓厚的工业化学生技术俱乐部、邀请企业界技术精英定期为学生做讲座，召开俱乐部ACE研讨会、开设适合企业发展要求的特色专业课程等多种方式培养学生的创新和实践能力。积极鼓励学生参加国际、国家级各类软件创新大赛，以赛促学，软件学院学生在各类比赛中都获得骄人成绩，获奖人次和获奖比例逐年提升。', 1436413675, 2),
(7, '软件学院青年校友论坛第10期暨创+沙龙第1期（地点变更）', '软件学院青年校友论坛第10期暨创+沙龙第1期\r\n \r\n时间：2015年5月15日16：00\r\n地点：活动中心320（软件学院停电）\r\n主题：技术型创业不得不说的那些事\r\n \r\n嘉宾简介：\r\n高嘉阳，快按钮&360智键&野兽骑行联合创始人&CTO；2008年就读于哈尔滨工业大学软件学院本科；2012年就读于香港中文大学计算机科学专业硕士。曾为淘宝共享事业部推荐系统工程师等。\r\n \r\n近期创立北京野兽科技有限公司，旨在用杰出的设计和一流的技术改变全人类的运动体验，公司获得天使投资人徐小平先生的投资。', 1436317590, 1),
(10, '2015年国际联合培养项目招生宣讲', ' 近日，软件学院院长助理张羽博士、软件学院国际合作秘书张宁老师为计算机科学与技术学院、软件学院大三、大四本科生针对2015级工程硕士联合培养班和大四本科生短期交流实习等国际联合培养项目做了招生宣讲。\r\n\r\n  计算机科学与技术学院、软件学院已与国际多所知名大学签署了联合培养协议，并在硕士生培养层面，创建了软件工程国际化人才的跨国、跨学科、跨文化培养模式及教育体系，实施了与国际接轨的办学运行机制，质量保障体系和教学管理体系，实现了“跨国、跨学科，双边对等招生，联合培养，联合答辩，联合授双学位，融合文化”的“MSE+X”软件工程硕士跨国联合培养模式。截止到2015年，MSE+X联合培养项目已实施10年，包括与法国波尔多大学（UB）、法国克莱蒙费朗第二大学（UBP）、德国柏林工业大学(TUB)、日本会津大学 (AiZU)、美国安柏瑞德航空航天大学(ERAU)、意大利帕维亚大学（UP）和瑞典林雪平大学（LiU）等七所大学的合作。今年将继续与UB、UBP、AiZU、UP和LiU等五所大学开展工程硕士联合培养项目的合作，每个项目预计招收5名学生。此外，还与法国克莱蒙费朗第二大学、芬兰奥卢大学开展了大四本科生短期交流项目，每个项目预计招收3~5名学生。\r\n\r\n	宣讲会上，张羽院长助理首先从优势、费用、取得学位等方面就出国留学做了全面阐述，接着张宁老师针对计算机科学与技术学院、软件学院的跨国联合培养工程硕士MSE+X 项目从目标、培养模式、招生数量、实施情况等方面做了全面介绍，让与会同学对两院的国际联合培养项目有了全面了解。会后，许多同学对工程硕士联合培养班和大四本科生短期交流项目踊跃提问，表现出浓厚的兴趣和热情，两位老师为同学们耐心细致地解答，还有许多同学当场报名参加2015级工程硕士联合培养班。\r\n备注：软件学院国际合作邮箱为ssic@hit.edu.cn, 欢迎咨询！', 1436409876, 3),
(8, '第八届英特尔杯全国大学生软件创新大赛', '为了进一步提升大学生创新思维，全面推动软件行业发展，促进软件专业技术人才培养，为国家软件产业输出有创新能力和实践能力的高端人才，提升高校毕业生的就业竞争力，教育部示范性软件学院建设工作办公室（现更名为:教育部示范性软件学院联盟）自 2008 年开始举办全国大学生软件创新大赛。2015年第八届“英特尔杯”全国大学生软件创新大赛由天津大学软件学院承办。\r\n近年来，随着移动互联网的快速发展及智能设备的迅速普及，移动应用与服务器端的云计算概念一起，引领了众多技术和商业创新，成为新的技术和应用热点。目前各大软件开发公司都将巨资投入到云计算及移动应用开发中。在继承前七届比赛成功经验的基础上，本届大赛的特色——热点领域，注重创新。\r\n大赛主题：基于云计算的用户体验创新\r\n参赛对象：受邀学校软件学院及计算机相关专业在校本科生及研究生\r\n教育部软件工程专业教学指导委员会、教育部示范性软件学院联盟、天津大学软件学院和英特尔四方共同邀请专家组成大赛组委会及专家委员会。大赛组委会负责审查、确定大赛赛程、参赛要求和评审方式；专家委员会负责大赛具体评审标准的制定以及项目阶段初赛、复赛、决赛的评审工作。\r\n　教育部高等学校软件工程专业教学指导委员会与教育部示范性软件学院联盟负责大赛全过程的指导、监督与支持工作；天津大学软件学院负责大赛组织与运营及大赛门户网站维护工作；英特尔公司负责提供资金及技术支持，大赛网站及官方微信、微博平台建设，竞赛作品市场化渠道等支持。\r\n', 1436405957, 1),
(9, '阿里巴巴安全技术竞赛ALICTF报名通知', '同学，是时候来ALICTF一展身手了\r\n\r\n阿里巴巴ALICTF还是要参加的，万一拿冠军了呢\r\n\r\n2001年，第二届“西湖论剑”时，刚踏入小学的您没有出手；\r\n\r\n2004年，全国网商齐聚杭州“网商大会”时，戴着红领巾唱歌的您没有出手；\r\n\r\n2007年，首届“中国网络工程师侠客行大会”吸引几十万网络工程师目光时，在课堂上背诵英语的您没有出手；\r\n\r\n2014年，8位生态系统用户在纽约敲响阿里巴巴上市钟时，奔波于图书馆自习室的您也没有出手；\r\n\r\n2015年，第二届阿里巴巴安全技术竞赛（ALICTF）来了……同学，轮到您出手的时候了！\r\n\r\n作为国内规模最大的安全技术竞赛之一，ALICTF已经吸引了北京大学、浙江大学、复旦大学、华中科技大学等100多所高校的300多支高校安全团队报名。ALICTF不但是同学们一次良好的技术实践，还有机会获得十万现金、美国BlackHat之旅、万元智能设备大礼包。而且，在ALICTF的比赛结果将作为阿里巴巴安全类岗位的笔试成绩，所有获奖同学都将直接进入阿里巴巴集团的校招终试阶段，而这也是阿里巴巴唯一的校招面试捷径。\r\n\r\nALICTF详细日程——\r\n\r\n报名地址：阿里巴巴ALICTF官网（www.alictf.com）；\r\n\r\n竞赛流程：\r\n\r\n2月13日—3月22日：报名；\r\n\r\n3月27日—3月29日：资格赛；\r\n\r\n4月11日—4月12日：总决赛；\r\n\r\n4月20日：结果公布；\r\n\r\nALICTF校园宣讲活动——\r\n\r\n为了帮助同学们在ALICTF中夺得好名次，ALICTF组委会邀请了道哥（吴瀚清，《白帽子讲安全》作者）、云舒（魏兴国，网络安全领域知名专家）等知名网络安全专家去全国9所高校为现场答疑解惑。详细安排日程如下：\r\n\r\n      小编偷偷泄露一句：今年ALICTF组委会的大佬很喜欢出Java的考题，并且他们还经常在下面这两个博客上写文章。不说了不说了，再说就泄题了。更多情况同学们可以关注@阿里安全 @阿里巴巴集团校园招聘，或咨询ALICTF官网的云客服。\r\n\r\nhttp://jaq.alibaba.com/blog.htm?spm=0.0.0.0.oXNXZs  （阿里移动安全博客）\r\n\r\nhttp://blog.aliyun.com/?spm=5176.383338.201.74.bIIJgc  （阿里云盾博客）\r\n\r\n有希望组队参赛寻找队友的同学可以发送个人信息到软件学院技术俱乐部--哈工大阿里巴巴高校技术联盟.联系邮箱zhao-guo-quan@126.com.\r\n\r\nALICTF校园宣讲活动——哈工大站 3月11日18:30-20:30 新活动中心214', 1436405679, 2);

-- --------------------------------------------------------

--
-- 表的结构 `person`
--

CREATE TABLE IF NOT EXISTS `person` (
  `pid` bigint(20) NOT NULL,
  `name` varchar(64) NOT NULL,
  `username` varchar(64) NOT NULL,
  `password` varchar(64) NOT NULL,
  `age` int(11) NOT NULL,
  `sex` tinyint(1) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `person`
--

INSERT INTO `person` (`pid`, `name`, `username`, `password`, `age`, `sex`) VALUES
(1, '吴永兴', '1133710119', '123456', 21, 0),
(2, '曾雷弋枭', '1133710122', '123456', 21, 1),
(3, '李斯泽', '1133710113', '123456', 21, 0);

-- --------------------------------------------------------

--
-- 表的结构 `respond`
--

CREATE TABLE IF NOT EXISTS `respond` (
  `rid` bigint(20) NOT NULL,
  `hid` bigint(20) NOT NULL,
  `pid` bigint(20) NOT NULL,
  `content` text NOT NULL,
  `time` bigint(20) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `respond`
--

INSERT INTO `respond` (`rid`, `hid`, `pid`, `content`, `time`) VALUES
(1, 2, 1, '测试', 1436341114),
(2, 2, 2, '枭哥是SB', 1436370605),
(3, 3, 1, '呵呵。工大有妹子？', 1436370857),
(4, 4, 3, 'amazing！！！！！！！！！！！！！！1', 1436454442),
(5, 7, 3, '兴哥又在钓妹子了', 1436455354),
(6, 2, 1, '好像很厉害的样子', 1436487617),
(7, 8, 1, '还不错', 1436494003);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `file`
--
ALTER TABLE `file`
  ADD PRIMARY KEY (`fid`);

--
-- Indexes for table `homework`
--
ALTER TABLE `homework`
  ADD PRIMARY KEY (`hid`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`nid`);

--
-- Indexes for table `person`
--
ALTER TABLE `person`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `respond`
--
ALTER TABLE `respond`
  ADD PRIMARY KEY (`rid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `aid` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `file`
--
ALTER TABLE `file`
  MODIFY `fid` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `homework`
--
ALTER TABLE `homework`
  MODIFY `hid` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `nid` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `person`
--
ALTER TABLE `person`
  MODIFY `pid` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `respond`
--
ALTER TABLE `respond`
  MODIFY `rid` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
