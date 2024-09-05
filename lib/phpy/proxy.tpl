<?=$import?>

class <?=$this->_proxyClass?>(<?=implode(', ', $parents)?>):
  def __init__(self, _this):
    self.__this = _this
    _this.set('_super', super())
    _this.set('_self', self)

<?php foreach($methods as $m):?>
  def <?=$m['name']?>(self, <?=$m['argv']?>):
    self.__this.call('<?=$m['name']?>', <?=$m['argv']?>)

<?php endforeach; ?>
