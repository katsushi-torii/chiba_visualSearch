import matplotlib.pyplot as plt
import numpy as np
from matplotlib.patches import Polygon

# u, v座標の例
u_values = [0.2, 0.3, 0.4]
v_values = [0.4, 0.3, 0.5]

# u, v から u', v' への変換関数
def uv_to_upvp(u, v):
    denominator = (-2 * u + 12 * v + 3)
    u_prime = 4 * u / denominator
    v_prime = 9 * v / denominator
    return u_prime, v_prime

# 変換後のu', v'座標
u_prime_values, v_prime_values = uv_to_upvp(np.array(u_values), np.array(v_values))

# 仮のUV色度図の可視光域座標（xy色度図から変換された値、正確なデータを使用すべきです）
uv_coords = np.array([
    [0.1978, 0.3122],
    [0.257, 0.343],
    [0.300, 0.380],
    [0.345, 0.400],
    [0.390, 0.432],
    [0.440, 0.472],
    [0.490, 0.532],
    [0.532, 0.575],
    [0.573, 0.614],
    [0.612, 0.666],
    [0.640, 0.700],
    [0.662, 0.753],
    [0.680, 0.780],
    [0.700, 0.750],
    [0.710, 0.700],
    [0.730, 0.640],
    [0.760, 0.610],
    [0.765, 0.565],
    [0.770, 0.510],
    [0.775, 0.460],
    [0.780, 0.420],
    [0.800, 0.370],
    [0.820, 0.320],
    [0.830, 0.270],
    [0.840, 0.230],
])

# 可視光域の座標をu', v'に変換
u_prime_coords, v_prime_coords = uv_to_upvp(uv_coords[:, 0], uv_coords[:, 1])

# グラフの設定
fig, ax = plt.subplots()

# 可視光域をu'v'色度図として多角形で塗りつぶし
polygon = Polygon(np.column_stack([u_prime_coords, v_prime_coords]), closed=True, edgecolor='black', facecolor='lightgray')
ax.add_patch(polygon)

# u'v'座標を赤い点としてプロット
ax.scatter(u_prime_values, v_prime_values, color='red', label='Data Points')

# グラフ設定
ax.set_title('u\'v\' Chromaticity Diagram with Visible Spectrum')
ax.set_xlabel('u\'')
ax.set_ylabel('v\'')

# 軸の範囲を設定
ax.set_xlim(0.0, 0.8)
ax.set_ylim(0.0, 0.6)

# グリッド表示
ax.grid(True)

# 凡例表示
ax.legend()

# グラフを表示
plt.show()
