<?php
namespace TFC\Report\Controller\Index;
use Magento\Framework\App\Action\Action as _P;
use Magento\Framework\Controller\ResultFactory as F;
use Magento\Framework\View\Result\Page;
/** 2019-09-18 @final Unable to use the PHP «final» keyword here because of the M2 code generation. */
class Index extends _P {
	/**    
	 * 2019-09-18
	 * @override
	 * @see _P::execute()    
	 * @used-by \Magento\Framework\App\Action\Action::dispatch():
	 * 		$result = $this->execute();
	 * https://github.com/magento/magento2/blob/2.2.1/lib/internal/Magento/Framework/App/Action/Action.php#L84-L125
	 * @return Page
	 */
	function execute() {return $this->resultFactory->create(F::TYPE_PAGE);}
}