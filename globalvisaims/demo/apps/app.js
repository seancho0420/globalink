
var app = angular.module('globalVisaIms', ['ngSanitize']);

app.controller('staffController', function($scope){
	$scope.employees = staffInfo;
});

app.directive('contactInfo', function(){
	return {
		restrict: 'E',
		templateUrl: 'partials/contact.html',
		controller: function($scope){
			$scope.contacts = contactInfo;
		}
	};
});

app.directive('aboutUs', function(){
	return {
		restrict: 'E',
		templateUrl: 'partials/aboutus.html',
		controller: function($scope){
			$scope.aboutus = aboutusInfo;
		}
	};
});

app.directive('news', function(){
	return {
		restrict: 'E',
		templateUrl: 'partials/news.html',
		controller: function($scope){
			$scope.news = announcement;
		}
	};
});

app.directive('immiInfo', function(){
	return {
		restrict: 'E',
		templateUrl: 'partials/immi-info.html',
		controller: function($scope){
			$scope.immiInfos = immiInfo;
		}
	};
});

app.directive('staffMember', function(){
	return {
		restrict: 'E',
		templateUrl: 'partials/staff.html',
		controller: function($scope){
			$scope.staffMembers = staffInfo;
		}
	};
});

app.directive('clientSuccess', function(){
	return {
		restrict: 'E',
		templateUrl: 'partials/client-success.html',
		controller: function($scope){
			$scope.clientSuccesses = clientSucc;
		}
	};
});

var contactInfo = [
{
	category: '주소',
	data: [{
		desc: '1 Elmhurst Ave. North York,'
	}, {
		desc : 'ON M2N 1R3'
	}, {
		desc: 'info@globalvisaims.com'
	}, {
		desc: '416-225-8686'
	}, {
		desc: '카카오톡ID: jackie2009'
	}]
}, {
	category: '영업시간',
	data: [{
		desc: '월 - 금: 9am - 7pm'
	}, {
		desc: '토: 11am - 5pm'
	}, {
		desc: '일: Closed'
	}]
}];

var aboutusInfo = [{
	category: 1,
	data: [{
		info: '글로벌 링크 이민에 오신 것을 환영합니다.'
	}, {
		info: '글로벌 링크 이민은 캐나다에서 학업이나 취업 또는 이민을 계획 하시는 분들에게 비자 상담 및 진행을 도와 드립니다.'
	}, {
		info: '특히 이민을 준비하고 있는 분들에게 어떤 학업 분야를 선택해야 취업과 이민이 용이 할수 있는지 정착 초기 부터 체계적인 상담으로 Short Term-Long Term 계획을 같이 세웁니다.'
	}]
}, {
	category: 2,
	data: [{
		info: '방문비자 (연장), 취업비자 (연장), 학생비자 (연장), 연방 취업 이민, 주정부 이민 진행은 전문 이민 컨설턴트가 담당합니다.'
	}, {
		info: '캐나다의 지속적인 이민법 개정으로 혼란이 지속되는 가운데에서도 글로벌링크와의 이민 상담을 통해 다른 이민 프로그램으로 이민에 성공하신 고객분들을 보며 글로벌 링크 이민팀은 깊은 보람을 느낍니다.'
	}]
}, {
	category: 3,
	data: [{
		info: '자세한 비자, 이민상담이 필요하신 분은 한달에 한번씩 진행되는 이민 설명회 & 1:1 무료 상담을 신청 하시거나, 다른 주에 거주하시는 분들은 전화로 무료 상담해 드리니 언제든 문의해 주시기 바랍니다.'
	}]
}];

// news data
var announcement = [
	{
		id: 1,
		author: 'Admin',
		title: '2014년 6월 20일 LMO 변경 사항',
		content: '<p>6월 20일 LMO 변경내용은 아래와 같습니다.</p>' +
			'<p>1. 숙박, 요식, 판매업 직군의 경우  실업율이 6% 이상인 지역의 경우 발급 제한.</p>' + 
			'<ol type="a"><li>Food Counter Attendants, Kitchen Helpers and Related Occupations <a href="http://www30.hrsdc.gc.ca/NOC/English/NOC/2006/QuickSearch.aspx?val65=6641">(NOC 6641)</a></li>' + 
			'<li>Light Duty Cleaners <a href="http://www30.hrsdc.gc.ca/NOC/English/NOC/2006/QuickSearch.aspx?val65=6661">(NOC 6661)</a></li>' + 
			'<li>Cashiers <a href="http://www30.hrsdc.gc.ca/NOC/English/NOC/2006/QuickSearch.aspx?val65=6611">(NOC 6611)</a></li>' + 
			'<li>Grocery Clerks and Store Shelf Stockers <a href="http://www30.hrsdc.gc.ca/NOC/English/NOC/2006/QuickSearch.aspx?val65=6622">(NOC 6622)</a></li>' + 
			'<li>Construction Trades Helpers and Labourers <a href="http://www30.hrsdc.gc.ca/NOC/English/NOC/2006/QuickSearch.aspx?val65=7611">(NOC 7611)</a></li>' + 
			'<li>Landscaping and Grounds Maintenance Labourers <a href="http://www30.hrsdc.gc.ca/NOC/English/NOC/2006/QuickSearch.aspx?val65=8612">(NOC 8612)</a></li>' + 
			'<li>Other Attendants in Accommodation and Travel <a href="http://www30.hrsdc.gc.ca/NOC/English/NOC/2006/QuickSearch.aspx?val65=6672">(NOC 6672)</a></li>' + 
			'<li>Janitors, Caretakers and Building Superintendents <a href="http://www30.hrsdc.gc.ca/NOC/English/NOC/2006/QuickSearch.aspx?val65=6663">(NOC 6663)</a></li>' + 
			'<li>Specialized Cleaners <a href="http://www30.hrsdc.gc.ca/NOC/English/NOC/2006/QuickSearch.aspx?val65=6662">(NOC 6662)</a></li>' + 
			'<li>Security Guards and Related Occupations <a href="http://www30.hrsdc.gc.ca/NOC/English/NOC/2006/QuickSearch.aspx?val65=6651">(NOC 6651)</a></li></ol>' + 
			'<p>2. 신청비 인상 $1000 (기존 $275)</p>' + 
			'<p>3. Lower Wage position 연장신청의 경우 최대 1년까지만 연장 가능 (기존 2년 연장 가능)</p>',
		upload_date: '2014-06-20'
	},
	{
		id: 2,
		author: 'Admin',
		title: '2015년 1월 부터 시행되는 Express Entry',
		content: '<p>정부는 2015년 1월 부터 기존의 연방 취업 이민제도에 Express Entry라는 새로운 제도를 도입 하겠다고 발표 했다.</p>' + 
			'<p>정부는 기존의 이민 신청 적체를 해소하고 실제로 필요한 인력들을 받아들이는 시스템으로 바꾸려는 움직임은 작년 부터 뉴스를 통해 공공연하게 표출되어왔다.</p>' + 
			'<p>처음엔 EOI(Expression of Interest)라는 명칭으로 새로운 개념의 이민 제도를 소개 했는데, 올 4월 Express Entry 란 이름으로 바뀌었고 2015년 1월부터 시행될것이라 예고함과 동시에, 이미 진행되고 있는 2014년도 각 이민 카테고리별 캡을 재조정 하여 내년부터는 완전히 리셋하고 다시 시작할 준비에 들어갔다.</p>' + 
			'<p>캐나다 내 인력으로는 공급이 부족한 분야를 이민자를 통해 인력난을 해소하겠다는 기본원칙을 내세우고 있고, 따라서 Job Offer를 받았거나 주정부 Nomination을 받은 사람들이 보다 빠르게 영주권을 신청할 수 있도록 할 것이다.</p>' + 
			'<p>적용 될 이민 카테고리</p>' + 
			'<ul><li>연방전문인력이민 (Federal Skilled Worker)</li>' + 
			'<li>연방전문산업기능이민 (Federal Skilled Trades Program)</li>' + 
			'<li>캐나다경험이민 (CEC)</li>' + 
			'<li>주정부 이민의 일부 (A Portion of PNP)</li></ul>',
		upload_date: '2014-06-18'
	},
	{
		id: 3,
		author: 'Admin',
		title: '시민권 취득과 유지 점점 어려워져…',
		content: '<p>2014년 2월 6일에 연방 정부가 Bill C-24을 소개했습니다. 이 법이 전달될 경우 시민권 이나 영주권을 취득이 더 어려워질 전망 입니다.</p>' + 
		'<p>자세한 내용은 아래와 같습니다.</p>' + 
		'<ol><li>언어시험 : 새로운 법은 모든 지원자 나이 14세 부터 64세까지 시험을 영어나 불어로 통과해야 함. (현재 시험을 봐야하는 나이는18세 부터 55세) 어린이나 노인분들에게 불리하게 적용.</li>' + 
		'<li>시민권 신청비 인상 : 2013년도 부터 신청비용 인상. 앞으로는 현재 수수료의 3배 부과 예정.</li>' + 
		'<li>발급시간 지연 : 현재 시민권 신청에서 취득까지의 소요시간 4-6년 앞으로는 소요시간 8-10년 사이로 늘어날 전망.</li>' + 
		'<li>까다로워진 거주요건 : 앞으로는 영주권자가 4년 이상 (6년 거주기간 중) 캐나다에 거주해야 시민권 신청 자격이 주어짐. 현재는 3년 이상 (5년 거주기간 중) 캐나다에 거주해야 하고 영주권자가 되기전에 캐나다에 거주한 시간도 인정되었지만 앞으로는 영주권자가 되기전 거주기간은 인정이 안됩니다.</li></ol>',
		upload_date: '2014-07-02'
	}
];

var immiInfo = [
{
	title: 'CEC (Canadian Experiance Class)',
	body: '<p>CEC (Canadian Experiance Class) 연방 유학 후 이민 또는 경험 이민이라고도 한다.</p>' +
		'<ul><li>캐나다에서 교육 받고 취업의 경력이 있는자를 대상으로 한다.</li>' + 
		'<li>기존의 독립 이민은 단순 점수제로 선발하여, 막상 캐나다에 도착했을 때 정착에 어려움을 격는 문제가 있어 이를 보완.</li>' + 
		'<li>어느정도 캐나다에 적응이 된 인력들에게 이민의 기회를 제공한다는 취지.</li>' + 
		'<li>높은 합격율과 신청 후 발급 까지의 기간이 짧은편.</li>' + 
		'<li>2014년 12월까지만 신청 가능.</li></ul>'
}, {
	title: 'PNP (Province Nominee Program)',
	body: '<ul><li>PNP (Province Nominee Program) 주정부 이민이라고도 한다.</li>' + 
		'<li>주정부에서 해당주의 필요한 인력이나 각 주별 조건에 맞는 사람들에게 영주권을 주는 제도.</li>' + 
		'<li>각 주에서 일정 기준을 가지고 신청자를 심사한 후, 통과된 후보자에 한해 연방정부로 최종심사를 넘긴다.</li>' + 
		'<li>CEC를 신청하기 위한 조건들이 충족되지 않거나, 유학과 취업등 신청하기까지의 기간이 부담스러운 경우 적합.</li></ul>'
}, {
	title: 'LMO (Labour Market Opinion)',
	body: '<ul><li>LMO (Labour Market Opinion) 캐나다 고용주가 외국인 노동자를 고용하기 위해 HRSDC 로부터 받아야 하는 노동허가(서)</li>' + 
		'<li>최근, 자국민 고용기회 박탈, 외국인 노동자에 대한 부적절한 처우등이 사회문제로 대두면서 점차 외국인 고용조건 강화</li>' + 
		'<ul><li>식당업계 외국인 노동자 고용 일시 중시(2014.04.24)</li>' + 
		'<li>캐나다인과 동등한 임금 지불 규정</li>' + 
		'<li>직장에서 공용어(영어/불어)외 외국어 사용 제한</li>' + 
		'<li>LMO발급 비용($275) 고용주 부담</li></ul>' +
		'<li>반면, 캐나다에서 부족한 특수기술직 및 고급인력의 경우에는 LMO, 취업비자 등을 신속하게 발급하거나 면제</li>' + 
		'<ul><li>IT, 회사 주재원, 워킹홀리데이, 그리고 취업비자나 일정기간 이상의 학생비자 소지자의 배우자등과 같은 경우는 LMO가 필요하지 않음</li></ul></ul>'
}];

// staff data
var staffInfo = [
	{
		name: 'Summer Ying Zhu',
		photo: 'img/woman.png',
		profile: '<ul><li>University of Toronto - BA honours</li>' + 
			'<li>Regulated Canadian Immigration Consultant (ICCRC : R507032)</li>' + 
			'<li>Summer는 이민 전문 컨설턴트로  한국, 중국, 일본, 러시아 등 다양한 국가, 고객들의 케이스를 노하우로 고객에 맞는 최선의 프로그램을 진행 합니다.</li></ul>'
	},
	{
		name: 'William Yeung',
		photo: 'img/man.png',
		profile: '<ul><li>University of Ryerson</li>' + 
			'<li>CMA, CPA</li>' + 
			'<li>풍부한 경험의 회계 경험으로 고객들의 세금, 회계 서비스 담당</li></ul>'
	},
	{
		name: 'Jackie So',
		photo: 'img/woman.png',
		profile: '<ul><li>University of Syracuse & Sejong – MBA</li>' + 
			'<li>캐나다, 미국, 유럽 취업 상담과 비자 진행 경험을 바탕으로 한국 고객들에게 맞는 취업, 이민 프로그램 상담진행</li>' +
			'<li>휴대전화: 000-000-0000</li>' + 
			'</ul>'
	},
	{
		name: 'Fanny Huang',
		photo: 'img/woman.png',
		profile: '<ul><li>Centennial College – Accounting</li>' + 
			'<li>이민 비자 서류 담당</li></ul>'
	}
];

var clientSucc = [
	{
		source: 'img/thumb_field.jpg',
		caption: [
		{
			title: 'First Carousel',
			body: 'This is the first carousel you can see'
		}]
	}, {
		source: 'img/thumb_gnome.jpg',
		caption: [
		{
			title: 'Second Carousel',
			body: 'Is the second one working?'
		}]
	}, {
		source: 'img/thumb_dog.jpg',
		caption: [
		{
			title: 'Third Carousel',
			body: 'I cannot see the third one'
		}]
	}, {
		source: 'img/thumb_pencils.jpg',
		caption: [
		{
			title: 'Third Carousel',
			body: 'I cannot see the third one'
		}]
	}, {
		source: 'img/thumb_leaf.jpg',
		caption: [
		{
			title: 'Third Carousel',
			body: 'I cannot see the third one'
		}]
	}, {
		source: 'img/thumb_train.jpg',
		caption: [
		{
			title: 'Third Carousel',
			body: 'I cannot see the third one'
		}]
	}, {
		source: 'img/thumb_river.jpg',
		caption: [
		{
			title: 'Third Carousel',
			body: 'I cannot see the third one'
		}]
	}, {
		source: 'img/thumb_golf.jpg',
		caption: [
		{
			title: 'Third Carousel',
			body: 'I cannot see the third one'
		}]
	}
];